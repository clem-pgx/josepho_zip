<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Url;
use \DOMDocument;
use ZipArchive;
use ZipStream\ZipStream;

class HomeController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function home(Request $request): Response {

        $form = $this->createFormBuilder()
            ->add('url', UrlType::class, ['required' => true])
            ->add('submit', SubmitType::class, ['label' => 'Je génère le dossier'])
            ->getForm();

        $form->handleRequest($request);

        $allImg = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $dom = file_get_contents($data['url']);

            $doc = new DOMDocument;

            @$doc->loadHTML($dom);

            foreach ($doc->getElementsByTagName('img') as $img) {
                $allImg[] = $img->getAttribute('data-src');
            }

            $test = array_slice($allImg, 1, count($allImg)-2);

            $zip = new ZipArchive();
            $filename = 'josepho_'.date("m-d-y").'.zip';
            if ( $zip->open( "/tmp/$filename", \ZIPARCHIVE::CREATE | \ZIPARCHIVE::OVERWRITE ) === TRUE )
            {
                foreach ( $test as $picture )
                {
                    $tmp = explode( '/', $picture );
                    ini_set('memory_limit', '-1');
                    $zip->addFromString( $tmp[count( $tmp ) - 1], file_get_contents( $picture ) );
                }
                $zip->close();

                $response = new Response( );

                $response->headers->set( "Content-type", mime_content_type( "/tmp/$filename" ) );
                $response->headers->set( "Content-Disposition", "attachment; filename=$filename" );
                $response->headers->set( "Content-length", filesize( "/tmp/$filename" ) );
                $response->headers->set( "Pragma", "no-cache" );
                $response->headers->set( "Expires", "0" );
                $response->send( );

                $response->setContent( readfile( "/tmp/$filename" ) );

                return $response;
            }
            else
            {
                error_log( "can't create zip file to download" );
            }
        }

        return $this->render('base.html.twig', [
            'form' => $form->createView(),
            'images' => $allImg
        ]);
    }
}
