<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_3159dfa3e4f9e027c97bdf782e4593c180d4836dd56c6ba07d317df347ba07cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </body>
</html>
<style>
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
}

*,*::before,*::after {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}

article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-size: 0.8125rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex=\"-1\"]:focus {
    outline: 0 !important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,h2,h3,h4,h5,h6 {
    margin-top: 0;
    margin-bottom: 0.5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[title],abbr[data-original-title] {
    text-decoration: underline;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    text-decoration-skip-ink: none
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

ol,ul,dl {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,ul ul,ol ul,ul ol {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

b,strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -0.25em
}

sup {
    top: -0.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):hover,a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}

pre,code,kbd,samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg {
    overflow: hidden;
    vertical-align: middle
}

table {
    border-collapse: collapse
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: 0.5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

input,button,select,optgroup,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,input {
    overflow: visible
}

button,select {
    text-transform: none
}

select {
    word-wrap: normal
}

button,[type=\"button\"],[type=\"reset\"],[type=\"submit\"] {
    -webkit-appearance: button
}

button:not(:disabled),[type=\"button\"]:not(:disabled),[type=\"reset\"]:not(:disabled),[type=\"submit\"]:not(:disabled) {
    cursor: pointer
}

button::-moz-focus-inner,[type=\"button\"]::-moz-focus-inner,[type=\"reset\"]::-moz-focus-inner,[type=\"submit\"]::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=\"radio\"],input[type=\"checkbox\"] {
    box-sizing: border-box;
    padding: 0
}

input[type=\"date\"],input[type=\"time\"],input[type=\"datetime-local\"],input[type=\"month\"] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=\"number\"]::-webkit-inner-spin-button,[type=\"number\"]::-webkit-outer-spin-button {
    height: auto
}

[type=\"search\"] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=\"search\"]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none !important
}

h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2
}

h1,.h1 {
    font-size: 2.8125rem
}

h2,.h2 {
    font-size: 2.75rem
}

h3,.h3 {
    font-size: 1.1875rem
}

h4,.h4 {
    font-size: 1.0625rem
}

h5,.h5 {
    font-size: 1.1538462rem
}

h6,.h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1)
}

small,.small {
    font-size: 80%;
    font-weight: 400
}

mark,.mark {
    padding: 0.2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}

.blockquote-footer::before {
    content: \"\\2014\\00A0\"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #6c757d
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word
}

a>code {
    color: inherit
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: 0.2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 576px) {
    .container {
        max-width:540px
    }
}

@media (min-width: 768px) {
    .container {
        max-width:720px
    }
}

@media (min-width: 992px) {
    .container {
        max-width:960px
    }
}

@media (min-width: 1200px) {
    .container {
        max-width:1140px
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,.no-gutters>[class*=\"col-\"] {
    padding-right: 0;
    padding-left: 0
}

.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col,.col-auto,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm,.col-sm-auto,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md,.col-md-auto,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg,.col-lg-auto,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl,.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%
}

.col-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%
}

.col-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%
}

.col-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%
}

.col-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%
}

.col-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    order: -1
}

.order-last {
    order: 13
}

.order-0 {
    order: 0
}

.order-1 {
    order: 1
}

.order-2 {
    order: 2
}

.order-3 {
    order: 3
}

.order-4 {
    order: 4
}

.order-5 {
    order: 5
}

.order-6 {
    order: 6
}

.order-7 {
    order: 7
}

.order-8 {
    order: 8
}

.order-9 {
    order: 9
}

.order-10 {
    order: 10
}

.order-11 {
    order: 11
}

.order-12 {
    order: 12
}

.offset-1 {
    margin-left: 8.3333333333%
}

.offset-2 {
    margin-left: 16.6666666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.3333333333%
}

.offset-5 {
    margin-left: 41.6666666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.3333333333%
}

.offset-8 {
    margin-left: 66.6666666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.3333333333%
}

.offset-11 {
    margin-left: 91.6666666667%
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-sm-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-sm-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-sm-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-sm-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-sm-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-sm-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-sm-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-sm-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-sm-first {
        order: -1
    }

    .order-sm-last {
        order: 13
    }

    .order-sm-0 {
        order: 0
    }

    .order-sm-1 {
        order: 1
    }

    .order-sm-2 {
        order: 2
    }

    .order-sm-3 {
        order: 3
    }

    .order-sm-4 {
        order: 4
    }

    .order-sm-5 {
        order: 5
    }

    .order-sm-6 {
        order: 6
    }

    .order-sm-7 {
        order: 7
    }

    .order-sm-8 {
        order: 8
    }

    .order-sm-9 {
        order: 9
    }

    .order-sm-10 {
        order: 10
    }

    .order-sm-11 {
        order: 11
    }

    .order-sm-12 {
        order: 12
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.3333333333%
    }

    .offset-sm-2 {
        margin-left: 16.6666666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.3333333333%
    }

    .offset-sm-5 {
        margin-left: 41.6666666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.3333333333%
    }

    .offset-sm-8 {
        margin-left: 66.6666666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.3333333333%
    }

    .offset-sm-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-md-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-md-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-md-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-md-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-md-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-md-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-md-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-md-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-md-first {
        order: -1
    }

    .order-md-last {
        order: 13
    }

    .order-md-0 {
        order: 0
    }

    .order-md-1 {
        order: 1
    }

    .order-md-2 {
        order: 2
    }

    .order-md-3 {
        order: 3
    }

    .order-md-4 {
        order: 4
    }

    .order-md-5 {
        order: 5
    }

    .order-md-6 {
        order: 6
    }

    .order-md-7 {
        order: 7
    }

    .order-md-8 {
        order: 8
    }

    .order-md-9 {
        order: 9
    }

    .order-md-10 {
        order: 10
    }

    .order-md-11 {
        order: 11
    }

    .order-md-12 {
        order: 12
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.3333333333%
    }

    .offset-md-2 {
        margin-left: 16.6666666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.3333333333%
    }

    .offset-md-5 {
        margin-left: 41.6666666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.3333333333%
    }

    .offset-md-8 {
        margin-left: 66.6666666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.3333333333%
    }

    .offset-md-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-lg-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-lg-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-lg-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-lg-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-lg-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-lg-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-lg-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-lg-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-lg-first {
        order: -1
    }

    .order-lg-last {
        order: 13
    }

    .order-lg-0 {
        order: 0
    }

    .order-lg-1 {
        order: 1
    }

    .order-lg-2 {
        order: 2
    }

    .order-lg-3 {
        order: 3
    }

    .order-lg-4 {
        order: 4
    }

    .order-lg-5 {
        order: 5
    }

    .order-lg-6 {
        order: 6
    }

    .order-lg-7 {
        order: 7
    }

    .order-lg-8 {
        order: 8
    }

    .order-lg-9 {
        order: 9
    }

    .order-lg-10 {
        order: 10
    }

    .order-lg-11 {
        order: 11
    }

    .order-lg-12 {
        order: 12
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.3333333333%
    }

    .offset-lg-2 {
        margin-left: 16.6666666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.3333333333%
    }

    .offset-lg-5 {
        margin-left: 41.6666666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.3333333333%
    }

    .offset-lg-8 {
        margin-left: 66.6666666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.3333333333%
    }

    .offset-lg-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-xl-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-xl-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-xl-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-xl-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-xl-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-xl-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-xl-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-xl-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-xl-first {
        order: -1
    }

    .order-xl-last {
        order: 13
    }

    .order-xl-0 {
        order: 0
    }

    .order-xl-1 {
        order: 1
    }

    .order-xl-2 {
        order: 2
    }

    .order-xl-3 {
        order: 3
    }

    .order-xl-4 {
        order: 4
    }

    .order-xl-5 {
        order: 5
    }

    .order-xl-6 {
        order: 6
    }

    .order-xl-7 {
        order: 7
    }

    .order-xl-8 {
        order: 8
    }

    .order-xl-9 {
        order: 9
    }

    .order-xl-10 {
        order: 10
    }

    .order-xl-11 {
        order: 11
    }

    .order-xl-12 {
        order: 12
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.3333333333%
    }

    .offset-xl-2 {
        margin-left: 16.6666666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.3333333333%
    }

    .offset-xl-5 {
        margin-left: 41.6666666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.3333333333%
    }

    .offset-xl-8 {
        margin-left: 66.6666666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.3333333333%
    }

    .offset-xl-11 {
        margin-left: 91.6666666667%
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529
}

.table th,.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table-sm th,.table-sm td {
    padding: 0.3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered th,.table-bordered td {
    border: 1px solid #dee2e6
}

.table-bordered thead th,.table-bordered thead td {
    border-bottom-width: 2px
}

.table-borderless th,.table-borderless td,.table-borderless thead th,.table-borderless tbody+tbody {
    border: 0
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05)
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, 0.075)
}

.table-primary,.table-primary>th,.table-primary>td {
    background-color: #b8daff
}

.table-primary th,.table-primary td,.table-primary thead th,.table-primary tbody+tbody {
    border-color: #7abaff
}

.table-hover .table-primary:hover {
    background-color: #9ecdff
}

.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th {
    background-color: #9ecdff
}

.table-secondary,.table-secondary>th,.table-secondary>td {
    background-color: #d6d8db
}

.table-secondary th,.table-secondary td,.table-secondary thead th,.table-secondary tbody+tbody {
    border-color: #b3b7bb
}

.table-hover .table-secondary:hover {
    background-color: #c8cccf
}

.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th {
    background-color: #c8cccf
}

.table-success,.table-success>th,.table-success>td {
    background-color: #c3e6cb
}

.table-success th,.table-success td,.table-success thead th,.table-success tbody+tbody {
    border-color: #8fd19e
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,.table-info>th,.table-info>td {
    background-color: #bee5eb
}

.table-info th,.table-info td,.table-info thead th,.table-info tbody+tbody {
    border-color: #86cfda
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,.table-warning>th,.table-warning>td {
    background-color: #ffeeba
}

.table-warning th,.table-warning td,.table-warning thead th,.table-warning tbody+tbody {
    border-color: #ffdf7e
}

.table-hover .table-warning:hover {
    background-color: #ffe7a0
}

.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th {
    background-color: #ffe7a0
}

.table-danger,.table-danger>th,.table-danger>td {
    background-color: #f5c6cb
}

.table-danger th,.table-danger td,.table-danger thead th,.table-danger tbody+tbody {
    border-color: #ed969e
}

.table-hover .table-danger:hover {
    background-color: #f1b1b7
}

.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th {
    background-color: #f1b1b7
}

.table-light,.table-light>th,.table-light>td {
    background-color: #fdfdfe
}

.table-light th,.table-light td,.table-light thead th,.table-light tbody+tbody {
    border-color: #fbfcfc
}

.table-hover .table-light:hover {
    background-color: #f1f1f1
}

.table-hover .table-light:hover>td,.table-hover .table-light:hover>th {
    background-color: #f1f1f1
}

.table-dark,.table-dark>th,.table-dark>td {
    background-color: #c6c8ca
}

.table-dark th,.table-dark td,.table-dark thead th,.table-dark tbody+tbody {
    border-color: #95999c
}

.table-hover .table-dark:hover {
    background-color: #b9bbbd
}

.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th {
    background-color: #b9bbbd
}

.table-active,.table-active>th,.table-active>td {
    background-color: rgba(0, 0, 0, 0.075)
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075)
}

.table-hover .table-active:hover>td,.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, 0.075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #343a40
}

.table-dark th,.table-dark td,.table-dark thead th {
    border-color: #454d55
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05)
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075)
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-sm>.table-bordered {
        border: 0
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-md>.table-bordered {
        border: 0
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-lg>.table-bordered {
        border: 0
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-xl>.table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

.table-responsive>.table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .form-control {
        transition: none
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:disabled,.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file,.form-control-range {
    display: block;
    width: 100%
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-sm,.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

select.form-control[size],select.form-control[multiple] {
    height: auto
}

textarea.form-control {
    height: auto
}

.form-text {
    display: block;
    margin-top: 0.25rem
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row>.col,.form-row>[class*=\"col-\"] {
    padding-right: 5px;
    padding-left: 5px
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem
}

.form-check-input:disabled~.form-check-label {
    color: #6c757d
}

.form-check-label {
    margin-bottom: 0
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(40, 167, 69, 0.9);
    border-radius: 0.25rem
}

.was-validated .form-control:valid,.form-control.is-valid {
    border-color: #28a745;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .form-control:valid:focus,.form-control.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .form-control:valid~.valid-feedback,.form-control.is-valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip,.form-control.is-valid~.valid-tooltip {
    display: block
}

.was-validated textarea.form-control:valid,textarea.form-control.is-valid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem)
}

.was-validated .custom-select:valid,.custom-select.is-valid {
    border-color: #28a745;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px, url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\") #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .custom-select:valid:focus,.custom-select.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .custom-select:valid~.valid-feedback,.custom-select.is-valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip,.custom-select.is-valid~.valid-tooltip {
    display: block
}

.was-validated .form-control-file:valid~.valid-feedback,.form-control-file.is-valid~.valid-feedback,.was-validated .form-control-file:valid~.valid-tooltip,.form-control-file.is-valid~.valid-tooltip {
    display: block
}

.was-validated .form-check-input:valid~.form-check-label,.form-check-input.is-valid~.form-check-label {
    color: #28a745
}

.was-validated .form-check-input:valid~.valid-feedback,.form-check-input.is-valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip,.form-check-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-control-input:valid~.custom-control-label,.custom-control-input.is-valid~.custom-control-label {
    color: #28a745
}

.was-validated .custom-control-input:valid~.custom-control-label::before,.custom-control-input.is-valid~.custom-control-label::before {
    border-color: #28a745
}

.was-validated .custom-control-input:valid~.valid-feedback,.custom-control-input.is-valid~.valid-feedback,.was-validated .custom-control-input:valid~.valid-tooltip,.custom-control-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,.custom-control-input.is-valid:checked~.custom-control-label::before {
    border-color: #34ce57;
    background-color: #34ce57
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,.custom-control-input.is-valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
    border-color: #28a745
}

.was-validated .custom-file-input:valid~.custom-file-label,.custom-file-input.is-valid~.custom-file-label {
    border-color: #28a745
}

.was-validated .custom-file-input:valid~.valid-feedback,.custom-file-input.is-valid~.valid-feedback,.was-validated .custom-file-input:valid~.valid-tooltip,.custom-file-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,.custom-file-input.is-valid:focus~.custom-file-label {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 0.25rem
}

.was-validated .form-control:invalid,.form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E\");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .form-control:invalid:focus,.form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .form-control:invalid~.invalid-feedback,.form-control.is-invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem)
}

.was-validated .custom-select:invalid,.custom-select.is-invalid {
    border-color: #dc3545;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px, url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E\") #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .custom-select:invalid:focus,.custom-select.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .custom-select:invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.custom-select.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .form-control-file:invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip,.form-control-file.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .form-check-input:invalid~.form-check-label,.form-check-input.is-invalid~.form-check-label {
    color: #dc3545
}

.was-validated .form-check-input:invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip,.form-check-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-control-input:invalid~.custom-control-label,.custom-control-input.is-invalid~.custom-control-label {
    color: #dc3545
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,.custom-control-input.is-invalid~.custom-control-label::before {
    border-color: #dc3545
}

.was-validated .custom-control-input:invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip,.custom-control-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,.custom-control-input.is-invalid:checked~.custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,.custom-control-input.is-invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
    border-color: #dc3545
}

.was-validated .custom-file-input:invalid~.custom-file-label,.custom-file-input.is-invalid~.custom-file-label {
    border-color: #dc3545
}

.was-validated .custom-file-input:invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip,.custom-file-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,.custom-file-input.is-invalid:focus~.custom-file-label {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width: 576px) {
    .form-inline label {
        display:flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0
    }

    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-plaintext {
        display: inline-block
    }

    .form-inline .input-group,.form-inline .custom-select {
        width: auto
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center
    }

    .form-inline .custom-control-label {
        margin-bottom: 0
    }
}

.btn {
    display: inline-block;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .btn {
        transition: none
    }
}

.btn:hover {
    color: #212529;
    text-decoration: none
}

.btn:focus,.btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.btn.disabled,.btn:disabled {
    opacity: 0.65
}

a.btn.disabled,fieldset:disabled a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary:focus,.btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5)
}

.btn-primary.disabled,.btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not(:disabled):not(.disabled):active,.btn-primary:not(:disabled):not(.disabled).active,.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf
}

.btn-primary:not(:disabled):not(.disabled):active:focus,.btn-primary:not(:disabled):not(.disabled).active:focus,.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5)
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62
}

.btn-secondary:focus,.btn-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5)
}

.btn-secondary.disabled,.btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:not(:disabled):not(.disabled):active,.btn-secondary:not(:disabled):not(.disabled).active,.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,.btn-secondary:not(:disabled):not(.disabled).active:focus,.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success:focus,.btn-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5)
}

.btn-success.disabled,.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled):active,.btn-success:not(:disabled):not(.disabled).active,.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled):active:focus,.btn-success:not(:disabled):not(.disabled).active:focus,.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info:focus,.btn-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5)
}

.btn-info.disabled,.btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not(:disabled):not(.disabled):active,.btn-info:not(:disabled):not(.disabled).active,.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f
}

.btn-info:not(:disabled):not(.disabled):active:focus,.btn-info:not(:disabled):not(.disabled).active:focus,.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5)
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning:focus,.btn-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5)
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show>.btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500
}

.btn-warning:not(:disabled):not(.disabled):active:focus,.btn-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger:focus,.btn-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5)
}

.btn-danger.disabled,.btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not(:disabled):not(.disabled):active,.btn-danger:not(:disabled):not(.disabled).active,.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d
}

.btn-danger:not(:disabled):not(.disabled):active:focus,.btn-danger:not(:disabled):not(.disabled).active:focus,.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5)
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light:focus,.btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5)
}

.btn-light.disabled,.btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not(:disabled):not(.disabled):active,.btn-light:not(:disabled):not(.disabled).active,.show>.btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df
}

.btn-light:not(:disabled):not(.disabled):active:focus,.btn-light:not(:disabled):not(.disabled).active:focus,.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark:focus,.btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5)
}

.btn-dark.disabled,.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not(:disabled):not(.disabled):active,.btn-dark:not(:disabled):not(.disabled).active,.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d
}

.btn-dark:not(:disabled):not(.disabled):active:focus,.btn-dark:not(:disabled):not(.disabled).active:focus,.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5)
}

.btn-outline-primary {
    color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:focus,.btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.btn-outline-primary.disabled,.btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not(:disabled):not(.disabled):active,.btn-outline-primary:not(:disabled):not(.disabled).active,.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:focus,.btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.btn-outline-secondary.disabled,.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,.btn-outline-secondary:not(:disabled):not(.disabled).active,.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:focus,.btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.btn-outline-success.disabled,.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not(:disabled):not(.disabled):active,.btn-outline-success:not(:disabled):not(.disabled).active,.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,.btn-outline-success:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:focus,.btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.btn-outline-info.disabled,.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not(:disabled):not(.disabled):active,.btn-outline-info:not(:disabled):not(.disabled).active,.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,.btn-outline-info:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.btn-outline-warning {
    color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:focus,.btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.btn-outline-warning.disabled,.btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not(:disabled):not(.disabled):active,.btn-outline-warning:not(:disabled):not(.disabled).active,.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:focus,.btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.btn-outline-danger.disabled,.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not(:disabled):not(.disabled):active,.btn-outline-danger:not(:disabled):not(.disabled).active,.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:focus,.btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.btn-outline-light.disabled,.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not(:disabled):not(.disabled):active,.btn-outline-light:not(:disabled):not(.disabled).active,.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,.btn-outline-light:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:focus,.btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.btn-outline-dark.disabled,.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not(:disabled):not(.disabled):active,.btn-outline-dark:not(:disabled):not(.disabled).active,.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    text-decoration: none
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline
}

.btn-link:focus,.btn-link.focus {
    text-decoration: underline;
    box-shadow: none
}

.btn-link:disabled,.btn-link.disabled {
    color: #6c757d;
    pointer-events: none
}

.btn-lg,.btn-group-lg>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

.btn-sm,.btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: 0.5rem
}

input[type=\"submit\"].btn-block,input[type=\"reset\"].btn-block,input[type=\"button\"].btn-block {
    width: 100%
}

.fade {
    transition: opacity 0.15s linear
}

@media (prefers-reduced-motion:reduce) {
    .fade {
        transition: none
    }
}

.fade:not(.show) {
    opacity: 0
}

.collapse:not(.show) {
    display: none
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease
}

@media (prefers-reduced-motion:reduce) {
    .collapsing {
        transition: none
    }
}

.dropup,.dropright,.dropdown,.dropleft {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem
}

.dropdown-menu-left {
    right: auto;
    left: 0
}

.dropdown-menu-right {
    right: 0;
    left: auto
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-toggle::after {
    vertical-align: 0
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\"
}

.dropleft .dropdown-toggle::after {
    display: none
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-menu[x-placement^=\"top\"],.dropdown-menu[x-placement^=\"right\"],.dropdown-menu[x-placement^=\"bottom\"],.dropdown-menu[x-placement^=\"left\"] {
    right: auto;
    bottom: auto
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-item:hover,.dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active,.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled,.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.6875rem;
    color: #6c757d;
    white-space: nowrap
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle
}

.btn-group>.btn,.btn-group-vertical>.btn {
    position: relative;
    flex: 1 1 auto
}

.btn-group>.btn:hover,.btn-group-vertical>.btn:hover {
    z-index: 1
}

.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active {
    z-index: 1
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group>.btn:not(:first-child),.btn-group>.btn-group:not(:first-child) {
    margin-left: -1px
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),.btn-group>.btn-group:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:not(:first-child),.btn-group>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem
}

.dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after {
    margin-left: 0
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0
}

.btn-sm+.dropdown-toggle-split,.btn-group-sm>.btn+.dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem
}

.btn-lg+.dropdown-toggle-split,.btn-group-lg>.btn+.dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center
}

.btn-group-vertical>.btn,.btn-group-vertical>.btn-group {
    width: 100%
}

.btn-group-vertical>.btn:not(:first-child),.btn-group-vertical>.btn-group:not(:first-child) {
    margin-top: -1px
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),.btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn:not(:first-child),.btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0
}

.btn-group-toggle>.btn input[type=\"radio\"],.btn-group-toggle>.btn-group>.btn input[type=\"radio\"],.btn-group-toggle>.btn input[type=\"checkbox\"],.btn-group-toggle>.btn-group>.btn input[type=\"checkbox\"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%
}

.input-group>.form-control,.input-group>.form-control-plaintext,.input-group>.custom-select,.input-group>.custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0
}

.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.form-control,.input-group>.custom-select+.form-control,.input-group>.custom-file+.form-control,.input-group>.form-control+.custom-select,.input-group>.form-control-plaintext+.custom-select,.input-group>.custom-select+.custom-select,.input-group>.custom-file+.custom-select,.input-group>.form-control+.custom-file,.input-group>.form-control-plaintext+.custom-file,.input-group>.custom-select+.custom-file,.input-group>.custom-file+.custom-file {
    margin-left: -1px
}

.input-group>.form-control:focus,.input-group>.custom-select:focus,.input-group>.custom-file .custom-file-input:focus~.custom-file-label {
    z-index: 3
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4
}

.input-group>.form-control:not(:last-child),.input-group>.custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.form-control:not(:first-child),.input-group>.custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group>.custom-file {
    display: flex;
    align-items: center
}

.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-prepend,.input-group-append {
    display: flex
}

.input-group-prepend .btn,.input-group-append .btn {
    position: relative;
    z-index: 2
}

.input-group-prepend .btn:focus,.input-group-append .btn:focus {
    z-index: 3
}

.input-group-prepend .btn+.btn,.input-group-append .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-append .btn+.input-group-text,.input-group-prepend .input-group-text+.input-group-text,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-append .input-group-text+.btn {
    margin-left: -1px
}

.input-group-prepend {
    margin-right: -1px
}

.input-group-append {
    margin-left: -1px
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.25rem
}

.input-group-text input[type=\"radio\"],.input-group-text input[type=\"checkbox\"] {
    margin-top: 0
}

.input-group-lg>.form-control:not(textarea),.input-group-lg>.custom-select {
    height: calc(1.5em + 1rem + 2px)
}

.input-group-lg>.form-control,.input-group-lg>.custom-select,.input-group-lg>.input-group-prepend>.input-group-text,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-append>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

.input-group-sm>.form-control:not(textarea),.input-group-sm>.custom-select {
    height: calc(1.5em + 0.5rem + 2px)
}

.input-group-sm>.form-control,.input-group-sm>.custom-select,.input-group-sm>.input-group-prepend>.input-group-text,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-append>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.input-group-lg>.custom-select,.input-group-sm>.custom-select {
    padding-right: 1.75rem
}

.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text,.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.21875rem;
    padding-left: 1.5rem
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #80bdff
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff;
    border-color: #b3d7ff
}

.custom-control-input:disabled~.custom-control-label {
    color: #6c757d
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #e9ecef
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top
}

.custom-control-label::before {
    position: absolute;
    top: 0.109375rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: \"\";
    background-color: #fff;
    border: #adb5bd solid 1px
}

.custom-control-label::after {
    position: absolute;
    top: 0.109375rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: \"\";
    background: no-repeat 50% / 50% 50%
}

.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e\")
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
    border-color: #007bff;
    background-color: #007bff
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e\")
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-radio .custom-control-label::before {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\")
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-switch {
    padding-left: 2.25rem
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem
}

.custom-switch .custom-control-label::after {
    top: calc(0.109375rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-switch .custom-control-label::after {
        transition: none
    }
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem)
}

.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple],.custom-select[size]:not([size=\"1\"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef
}

.custom-select::-ms-expand {
    display: none
}

.custom-select-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem
}

.custom-select-lg {
    height: calc(1.5em + 1rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus~.custom-file-label {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-file-input:disabled~.custom-file-label {
    background-color: #e9ecef
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: \"Browse\"
}

.custom-file-input~.custom-file-label[data-browse]::after {
    content: attr(data-browse)
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: \"Browse\";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0
}

.custom-range {
    width: 100%;
    height: calc(1rem + 0.4rem);
    padding: 0;
    background-color: transparent;
    appearance: none
}

.custom-range:focus {
    outline: none
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range::-moz-focus-outer {
    border: 0
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-moz-range-thumb {
        transition: none
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-ms-thumb {
        transition: none
    }
}

.custom-range::-ms-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-moz-range-track {
    cursor: default
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd
}

.custom-control-label::before,.custom-file-label,.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-control-label::before,.custom-file-label,.custom-select {
        transition: none
    }
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem
}

.nav-link:hover,.nav-link:focus {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.nav-tabs .nav-link:hover,.nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: 0.25rem
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem
}

.navbar>.container,.navbar>.container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:hover,.navbar-brand:focus {
    text-decoration: none
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem
}

.navbar-toggler:hover,.navbar-toggler:focus {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: \"\";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width: 575.98px) {
    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start
}

.navbar-expand>.container,.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem
}

.navbar-expand>.container,.navbar-expand>.container-fluid {
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-brand:hover,.navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-nav .nav-link:hover,.navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3)
}

.navbar-light .navbar-nav .show>.nav-link,.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-text a:hover,.navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:hover,.navbar-dark .navbar-brand:focus {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-nav .nav-link:hover,.navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25)
}

.navbar-dark .navbar-nav .show>.nav-link,.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .nav-link.active {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:hover,.navbar-dark .navbar-text a:focus {
    color: #fff
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.card-title {
    margin-bottom: 0.75rem
}

.card-subtitle {
    margin-top: -0.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link+.card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125)
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid rgba(0, 0, 0, 0.125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px)
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -0.75rem;
    margin-left: -0.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img {
    width: 100%;
    border-radius: calc(0.25rem - 1px)
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px)
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px)
}

.card-deck {
    display: flex;
    flex-direction: column
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-deck {
        flex-flow:row wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group {
    display: flex;
    flex-direction: column
}

.card-group>.card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-group {
        flex-flow:row wrap
    }

    .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-top,.card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-bottom,.card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-top,.card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-bottom,.card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0
    }
}

.card-columns .card {
    margin-bottom: 0.75rem
}

@media (min-width: 576px) {
    .card-columns {
        column-count:3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1
    }

    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.accordion>.card {
    overflow: hidden
}

.accordion>.card:not(:first-of-type) .card-header:first-child {
    border-radius: 0
}

.accordion>.card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0
}

.accordion>.card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.accordion>.card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.accordion>.card .card-header {
    margin-bottom: -1px
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: \"/\"
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #6c757d
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6
}

.page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 3.4375rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.6875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .badge {
        transition: none
    }
}

a.badge:hover,a.badge:focus {
    text-decoration: none
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

a.badge-primary:hover,a.badge-primary:focus {
    color: #fff;
    background-color: #0062cc
}

a.badge-primary:focus,a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d
}

a.badge-secondary:hover,a.badge-secondary:focus {
    color: #fff;
    background-color: #545b62
}

a.badge-secondary:focus,a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

a.badge-success:hover,a.badge-success:focus {
    color: #fff;
    background-color: #1e7e34
}

a.badge-success:focus,a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

a.badge-info:hover,a.badge-info:focus {
    color: #fff;
    background-color: #117a8b
}

a.badge-info:focus,a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.badge-warning {
    color: #212529;
    background-color: #ffc107
}

a.badge-warning:hover,a.badge-warning:focus {
    color: #212529;
    background-color: #d39e00
}

a.badge-warning:focus,a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

a.badge-danger:hover,a.badge-danger:focus {
    color: #fff;
    background-color: #bd2130
}

a.badge-danger:focus,a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa
}

a.badge-light:hover,a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5
}

a.badge-light:focus,a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

a.badge-dark:hover,a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124
}

a.badge-dark:focus,a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 0.3rem
}

@media (min-width: 576px) {
    .jumbotron {
        padding:4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible {
    padding-right: 4rem
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9ecdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert-secondary hr {
    border-top-color: #c8cccf
}

.alert-secondary .alert-link {
    color: #212326
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c32
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe7a0
}

.alert-warning .alert-link {
    color: #533f02
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b1b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #f1f1f1
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbd
}

.alert-dark .alert-link {
    color: #040505
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    transition: width 0.6s ease
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar {
        transition: none
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar-animated {
        animation: none
    }
}

.media {
    display: flex;
    align-items: flex-start
}

.media-body {
    flex: 1
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:hover,.list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125)
}

.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.list-group-item.disabled,.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-horizontal {
    flex-direction: row
}

.list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0
}

.list-group-horizontal .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0
}

.list-group-horizontal .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction:row
    }

    .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction:row
    }

    .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction:row
    }

    .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction:row
    }

    .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

.list-group-item-primary.list-group-item-action:hover,.list-group-item-primary.list-group-item-action:focus {
    color: #004085;
    background-color: #9ecdff
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db
}

.list-group-item-secondary.list-group-item-action:hover,.list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cccf
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

.list-group-item-success.list-group-item-action:hover,.list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

.list-group-item-info.list-group-item-action:hover,.list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

.list-group-item-warning.list-group-item-action:hover,.list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe7a0
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

.list-group-item-danger.list-group-item-action:hover,.list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b1b7
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

.list-group-item-light.list-group-item-action:hover,.list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #f1f1f1
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

.list-group-item-dark.list-group-item-action:hover,.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbd
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.5
}

.close:hover {
    color: #000;
    text-decoration: none
}

.close:not(:disabled):not(.disabled):hover,.close:not(:disabled):not(.disabled):focus {
    opacity: 0.75
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    appearance: none
}

a.close.disabled {
    pointer-events: none
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem
}

.toast.showing {
    opacity: 1
}

.toast.show {
    display: block;
    opacity: 1
}

.toast.hide {
    display: none
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05)
}

.toast-body {
    padding: 0.75rem
}

.modal-open {
    overflow: hidden
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px)
}

@media (prefers-reduced-motion:reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    transform: none
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem)
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden
}

.modal-dialog-scrollable .modal-header,.modal-dialog-scrollable .modal-footer {
    flex-shrink: 0
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem)
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: \"\"
}

.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: 0.5
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem
}

.modal-footer>:not(:first-child) {
    margin-left: 0.25rem
}

.modal-footer>:not(:last-child) {
    margin-right: 0.25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width:500px;
        margin: 1.75rem auto
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem)
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem)
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem)
    }

    .modal-sm {
        max-width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg,.modal-xl {
        max-width:800px
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width:1140px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: 0.9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem
}

.tooltip .arrow::before {
    position: absolute;
    content: \"\";
    border-color: transparent;
    border-style: solid
}

.bs-tooltip-top,.bs-tooltip-auto[x-placement^=\"top\"] {
    padding: 0.4rem 0
}

.bs-tooltip-top .arrow,.bs-tooltip-auto[x-placement^=\"top\"] .arrow {
    bottom: 0
}

.bs-tooltip-top .arrow::before,.bs-tooltip-auto[x-placement^=\"top\"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000
}

.bs-tooltip-right,.bs-tooltip-auto[x-placement^=\"right\"] {
    padding: 0 0.4rem
}

.bs-tooltip-right .arrow,.bs-tooltip-auto[x-placement^=\"right\"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem
}

.bs-tooltip-right .arrow::before,.bs-tooltip-auto[x-placement^=\"right\"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000
}

.bs-tooltip-bottom,.bs-tooltip-auto[x-placement^=\"bottom\"] {
    padding: 0.4rem 0
}

.bs-tooltip-bottom .arrow,.bs-tooltip-auto[x-placement^=\"bottom\"] .arrow {
    top: 0
}

.bs-tooltip-bottom .arrow::before,.bs-tooltip-auto[x-placement^=\"bottom\"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000
}

.bs-tooltip-left,.bs-tooltip-auto[x-placement^=\"left\"] {
    padding: 0 0.4rem
}

.bs-tooltip-left .arrow,.bs-tooltip-auto[x-placement^=\"left\"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem
}

.bs-tooltip-left .arrow::before,.bs-tooltip-auto[x-placement^=\"left\"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem
}

.popover .arrow::before,.popover .arrow::after {
    position: absolute;
    display: block;
    content: \"\";
    border-color: transparent;
    border-style: solid
}

.bs-popover-top,.bs-popover-auto[x-placement^=\"top\"] {
    margin-bottom: 0.5rem
}

.bs-popover-top>.arrow,.bs-popover-auto[x-placement^=\"top\"]>.arrow {
    bottom: calc((0.5rem + 1px) * -1)
}

.bs-popover-top>.arrow::before,.bs-popover-auto[x-placement^=\"top\"]>.arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-top>.arrow::after,.bs-popover-auto[x-placement^=\"top\"]>.arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff
}

.bs-popover-right,.bs-popover-auto[x-placement^=\"right\"] {
    margin-left: 0.5rem
}

.bs-popover-right>.arrow,.bs-popover-auto[x-placement^=\"right\"]>.arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0
}

.bs-popover-right>.arrow::before,.bs-popover-auto[x-placement^=\"right\"]>.arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-right>.arrow::after,.bs-popover-auto[x-placement^=\"right\"]>.arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff
}

.bs-popover-bottom,.bs-popover-auto[x-placement^=\"bottom\"] {
    margin-top: 0.5rem
}

.bs-popover-bottom>.arrow,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow {
    top: calc((0.5rem + 1px) * -1)
}

.bs-popover-bottom>.arrow::before,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-bottom>.arrow::after,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff
}

.bs-popover-bottom .popover-header::before,.bs-popover-auto[x-placement^=\"bottom\"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: \"\";
    border-bottom: 1px solid #f7f7f7
}

.bs-popover-left,.bs-popover-auto[x-placement^=\"left\"] {
    margin-right: 0.5rem
}

.bs-popover-left>.arrow,.bs-popover-auto[x-placement^=\"left\"]>.arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0
}

.bs-popover-left>.arrow::before,.bs-popover-auto[x-placement^=\"left\"]>.arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-left>.arrow::after,.bs-popover-auto[x-placement^=\"left\"]>.arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.8125rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: 0.5rem 0.75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel.pointer-event {
    touch-action: pan-y
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: \"\"
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .carousel-item {
        transition: none
    }
}

.carousel-item.active,.carousel-item-next,.carousel-item-prev {
    display: block
}

.carousel-item-next:not(.carousel-item-left),.active.carousel-item-right {
    transform: translateX(100%)
}

.carousel-item-prev:not(.carousel-item-right),.active.carousel-item-left {
    transform: translateX(-100%)
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none
}

.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1
}

.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s 0.6s opacity
}

@media (prefers-reduced-motion:reduce) {
    .carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
        transition: none
    }
}

.carousel-control-prev,.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-control-prev,.carousel-control-next {
        transition: none
    }
}

.carousel-control-prev:hover,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-prev-icon,.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%
}

.carousel-control-prev-icon {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e\")
}

.carousel-control-next-icon {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e\")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-indicators li {
        transition: none
    }
}

.carousel-indicators .active {
    opacity: 1
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg)
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: spinner-border 0.75s linear infinite
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em
}

@keyframes spinner-grow {
    0% {
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    animation: spinner-grow 0.75s linear infinite
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem
}

.align-baseline {
    vertical-align: baseline !important
}

.align-top {
    vertical-align: top !important
}

.align-middle {
    vertical-align: middle !important
}

.align-bottom {
    vertical-align: bottom !important
}

.align-text-bottom {
    vertical-align: text-bottom !important
}

.align-text-top {
    vertical-align: text-top !important
}

.bg-primary {
    background-color: #007bff !important
}

a.bg-primary:hover,button.bg-primary:hover,a.bg-primary:focus,button.bg-primary:focus {
    background-color: #0062cc !important
}

.bg-secondary {
    background-color: #6c757d !important
}

a.bg-secondary:hover,button.bg-secondary:hover,a.bg-secondary:focus,button.bg-secondary:focus {
    background-color: #545b62 !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:hover,button.bg-success:hover,a.bg-success:focus,button.bg-success:focus {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:hover,button.bg-info:hover,a.bg-info:focus,button.bg-info:focus {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:hover,button.bg-warning:hover,a.bg-warning:focus,button.bg-warning:focus {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:hover,button.bg-danger:hover,a.bg-danger:focus,button.bg-danger:focus {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:hover,button.bg-light:hover,a.bg-light:focus,button.bg-light:focus {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:hover,button.bg-dark:hover,a.bg-dark:focus,button.bg-dark:focus {
    background-color: #1d2124 !important
}

.bg-white {
    background-color: #fff !important
}

.bg-transparent {
    background-color: transparent !important
}

.border {
    border: 1px solid #dee2e6 !important
}

.border-top {
    border-top: 1px solid #dee2e6 !important
}

.border-right {
    border-right: 1px solid #dee2e6 !important
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important
}

.border-left {
    border-left: 1px solid #dee2e6 !important
}

.border-0 {
    border: 0 !important
}

.border-top-0 {
    border-top: 0 !important
}

.border-right-0 {
    border-right: 0 !important
}

.border-bottom-0 {
    border-bottom: 0 !important
}

.border-left-0 {
    border-left: 0 !important
}

.border-primary {
    border-color: #007bff !important
}

.border-secondary {
    border-color: #6c757d !important
}

.border-success {
    border-color: #28a745 !important
}

.border-info {
    border-color: #17a2b8 !important
}

.border-warning {
    border-color: #ffc107 !important
}

.border-danger {
    border-color: #dc3545 !important
}

.border-light {
    border-color: #f8f9fa !important
}

.border-dark {
    border-color: #343a40 !important
}

.border-white {
    border-color: #fff !important
}

.rounded-sm {
    border-radius: 0.2rem !important
}

.rounded {
    border-radius: 0.25rem !important
}

.rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important
}

.rounded-right {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important
}

.rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important
}

.rounded-left {
    border-top-left-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important
}

.rounded-lg {
    border-radius: 0.3rem !important
}

.rounded-circle {
    border-radius: 50% !important
}

.rounded-pill {
    border-radius: 50rem !important
}

.rounded-0 {
    border-radius: 0 !important
}

.clearfix::after {
    display: block;
    clear: both;
    content: \"\"
}

.d-none {
    display: none !important
}

.d-inline {
    display: inline !important
}

.d-inline-block {
    display: inline-block !important
}

.d-block {
    display: block !important
}

.d-table {
    display: table !important
}

.d-table-row {
    display: table-row !important
}

.d-table-cell {
    display: table-cell !important
}

.d-flex {
    display: flex !important
}

.d-inline-flex {
    display: inline-flex !important
}

@media (min-width: 576px) {
    .d-sm-none {
        display:none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
    }

    .d-sm-block {
        display: block !important
    }

    .d-sm-table {
        display: table !important
    }

    .d-sm-table-row {
        display: table-row !important
    }

    .d-sm-table-cell {
        display: table-cell !important
    }

    .d-sm-flex {
        display: flex !important
    }

    .d-sm-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display:none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
    }

    .d-md-block {
        display: block !important
    }

    .d-md-table {
        display: table !important
    }

    .d-md-table-row {
        display: table-row !important
    }

    .d-md-table-cell {
        display: table-cell !important
    }

    .d-md-flex {
        display: flex !important
    }

    .d-md-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display:none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
    }

    .d-lg-block {
        display: block !important
    }

    .d-lg-table {
        display: table !important
    }

    .d-lg-table-row {
        display: table-row !important
    }

    .d-lg-table-cell {
        display: table-cell !important
    }

    .d-lg-flex {
        display: flex !important
    }

    .d-lg-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display:none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: flex !important
    }

    .d-xl-inline-flex {
        display: inline-flex !important
    }
}

@media print {
    .d-print-none {
        display: none !important
    }

    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: flex !important
    }

    .d-print-inline-flex {
        display: inline-flex !important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: \"\"
}

.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.8571428571%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.embed-responsive-21by9::before {
    padding-top: 42.8571428571%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    flex-direction: row !important
}

.flex-column {
    flex-direction: column !important
}

.flex-row-reverse {
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    flex-direction: column-reverse !important
}

.flex-wrap {
    flex-wrap: wrap !important
}

.flex-nowrap {
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important
}

.flex-fill {
    flex: 1 1 auto !important
}

.flex-grow-0 {
    flex-grow: 0 !important
}

.flex-grow-1 {
    flex-grow: 1 !important
}

.flex-shrink-0 {
    flex-shrink: 0 !important
}

.flex-shrink-1 {
    flex-shrink: 1 !important
}

.justify-content-start {
    justify-content: flex-start !important
}

.justify-content-end {
    justify-content: flex-end !important
}

.justify-content-center {
    justify-content: center !important
}

.justify-content-between {
    justify-content: space-between !important
}

.justify-content-around {
    justify-content: space-around !important
}

.align-items-start {
    align-items: flex-start !important
}

.align-items-end {
    align-items: flex-end !important
}

.align-items-center {
    align-items: center !important
}

.align-items-baseline {
    align-items: baseline !important
}

.align-items-stretch {
    align-items: stretch !important
}

.align-content-start {
    align-content: flex-start !important
}

.align-content-end {
    align-content: flex-end !important
}

.align-content-center {
    align-content: center !important
}

.align-content-between {
    align-content: space-between !important
}

.align-content-around {
    align-content: space-around !important
}

.align-content-stretch {
    align-content: stretch !important
}

.align-self-auto {
    align-self: auto !important
}

.align-self-start {
    align-self: flex-start !important
}

.align-self-end {
    align-self: flex-end !important
}

.align-self-center {
    align-self: center !important
}

.align-self-baseline {
    align-self: baseline !important
}

.align-self-stretch {
    align-self: stretch !important
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction:row !important
    }

    .flex-sm-column {
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-sm-fill {
        flex: 1 1 auto !important
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-sm-start {
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        justify-content: center !important
    }

    .justify-content-sm-between {
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        justify-content: space-around !important
    }

    .align-items-sm-start {
        align-items: flex-start !important
    }

    .align-items-sm-end {
        align-items: flex-end !important
    }

    .align-items-sm-center {
        align-items: center !important
    }

    .align-items-sm-baseline {
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        align-items: stretch !important
    }

    .align-content-sm-start {
        align-content: flex-start !important
    }

    .align-content-sm-end {
        align-content: flex-end !important
    }

    .align-content-sm-center {
        align-content: center !important
    }

    .align-content-sm-between {
        align-content: space-between !important
    }

    .align-content-sm-around {
        align-content: space-around !important
    }

    .align-content-sm-stretch {
        align-content: stretch !important
    }

    .align-self-sm-auto {
        align-self: auto !important
    }

    .align-self-sm-start {
        align-self: flex-start !important
    }

    .align-self-sm-end {
        align-self: flex-end !important
    }

    .align-self-sm-center {
        align-self: center !important
    }

    .align-self-sm-baseline {
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction:row !important
    }

    .flex-md-column {
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-md-wrap {
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-md-fill {
        flex: 1 1 auto !important
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-md-start {
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        justify-content: center !important
    }

    .justify-content-md-between {
        justify-content: space-between !important
    }

    .justify-content-md-around {
        justify-content: space-around !important
    }

    .align-items-md-start {
        align-items: flex-start !important
    }

    .align-items-md-end {
        align-items: flex-end !important
    }

    .align-items-md-center {
        align-items: center !important
    }

    .align-items-md-baseline {
        align-items: baseline !important
    }

    .align-items-md-stretch {
        align-items: stretch !important
    }

    .align-content-md-start {
        align-content: flex-start !important
    }

    .align-content-md-end {
        align-content: flex-end !important
    }

    .align-content-md-center {
        align-content: center !important
    }

    .align-content-md-between {
        align-content: space-between !important
    }

    .align-content-md-around {
        align-content: space-around !important
    }

    .align-content-md-stretch {
        align-content: stretch !important
    }

    .align-self-md-auto {
        align-self: auto !important
    }

    .align-self-md-start {
        align-self: flex-start !important
    }

    .align-self-md-end {
        align-self: flex-end !important
    }

    .align-self-md-center {
        align-self: center !important
    }

    .align-self-md-baseline {
        align-self: baseline !important
    }

    .align-self-md-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction:row !important
    }

    .flex-lg-column {
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-lg-fill {
        flex: 1 1 auto !important
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-lg-start {
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        justify-content: center !important
    }

    .justify-content-lg-between {
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        justify-content: space-around !important
    }

    .align-items-lg-start {
        align-items: flex-start !important
    }

    .align-items-lg-end {
        align-items: flex-end !important
    }

    .align-items-lg-center {
        align-items: center !important
    }

    .align-items-lg-baseline {
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        align-items: stretch !important
    }

    .align-content-lg-start {
        align-content: flex-start !important
    }

    .align-content-lg-end {
        align-content: flex-end !important
    }

    .align-content-lg-center {
        align-content: center !important
    }

    .align-content-lg-between {
        align-content: space-between !important
    }

    .align-content-lg-around {
        align-content: space-around !important
    }

    .align-content-lg-stretch {
        align-content: stretch !important
    }

    .align-self-lg-auto {
        align-self: auto !important
    }

    .align-self-lg-start {
        align-self: flex-start !important
    }

    .align-self-lg-end {
        align-self: flex-end !important
    }

    .align-self-lg-center {
        align-self: center !important
    }

    .align-self-lg-baseline {
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction:row !important
    }

    .flex-xl-column {
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-xl-fill {
        flex: 1 1 auto !important
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-xl-start {
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        justify-content: center !important
    }

    .justify-content-xl-between {
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        justify-content: space-around !important
    }

    .align-items-xl-start {
        align-items: flex-start !important
    }

    .align-items-xl-end {
        align-items: flex-end !important
    }

    .align-items-xl-center {
        align-items: center !important
    }

    .align-items-xl-baseline {
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        align-items: stretch !important
    }

    .align-content-xl-start {
        align-content: flex-start !important
    }

    .align-content-xl-end {
        align-content: flex-end !important
    }

    .align-content-xl-center {
        align-content: center !important
    }

    .align-content-xl-between {
        align-content: space-between !important
    }

    .align-content-xl-around {
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        align-content: stretch !important
    }

    .align-self-xl-auto {
        align-self: auto !important
    }

    .align-self-xl-start {
        align-self: flex-start !important
    }

    .align-self-xl-end {
        align-self: flex-end !important
    }

    .align-self-xl-center {
        align-self: center !important
    }

    .align-self-xl-baseline {
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        align-self: stretch !important
    }
}

.float-left {
    float: left !important
}

.float-right {
    float: right !important
}

.float-none {
    float: none !important
}

@media (min-width: 576px) {
    .float-sm-left {
        float:left !important
    }

    .float-sm-right {
        float: right !important
    }

    .float-sm-none {
        float: none !important
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float:left !important
    }

    .float-md-right {
        float: right !important
    }

    .float-md-none {
        float: none !important
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float:left !important
    }

    .float-lg-right {
        float: right !important
    }

    .float-lg-none {
        float: none !important
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float:left !important
    }

    .float-xl-right {
        float: right !important
    }

    .float-xl-none {
        float: none !important
    }
}

.overflow-auto {
    overflow: auto !important
}

.overflow-hidden {
    overflow: hidden !important
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: sticky !important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports (position: sticky) {
    .sticky-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important
}

.shadow-none {
    box-shadow: none !important
}

.w-25 {
    width: 25% !important
}

.w-50 {
    width: 50% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.w-auto {
    width: auto !important
}

.h-25 {
    height: 25% !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.h-auto {
    height: auto !important
}

.mw-100 {
    max-width: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.min-vw-100 {
    min-width: 100vw !important
}

.min-vh-100 {
    min-height: 100vh !important
}

.vw-100 {
    width: 100vw !important
}

.vh-100 {
    height: 100vh !important
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: \"\";
    background-color: rgba(0, 0, 0, 0)
}

.m-0 {
    margin: 0 !important
}

.mt-0,.my-0 {
    margin-top: 0 !important
}

.mr-0,.mx-0 {
    margin-right: 0 !important
}

.mb-0,.my-0 {
    margin-bottom: 0 !important
}

.ml-0,.mx-0 {
    margin-left: 0 !important
}

.m-1 {
    margin: 0.25rem !important
}

.mt-1,.my-1 {
    margin-top: 0.25rem !important
}

.mr-1,.mx-1 {
    margin-right: 0.25rem !important
}

.mb-1,.my-1 {
    margin-bottom: 0.25rem !important
}

.ml-1,.mx-1 {
    margin-left: 0.25rem !important
}

.m-2 {
    margin: 0.5rem !important
}

.mt-2,.my-2 {
    margin-top: 0.5rem !important
}

.mr-2,.mx-2 {
    margin-right: 0.5rem !important
}

.mb-2,.my-2 {
    margin-bottom: 0.5rem !important
}

.ml-2,.mx-2 {
    margin-left: 0.5rem !important
}

.m-3 {
    margin: 1rem !important
}

.mt-3,.my-3 {
    margin-top: 1rem !important
}

.mr-3,.mx-3 {
    margin-right: 1rem !important
}

.mb-3,.my-3 {
    margin-bottom: 1rem !important
}

.ml-3,.mx-3 {
    margin-left: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.mt-4,.my-4 {
    margin-top: 1.5rem !important
}

.mr-4,.mx-4 {
    margin-right: 1.5rem !important
}

.mb-4,.my-4 {
    margin-bottom: 1.5rem !important
}

.ml-4,.mx-4 {
    margin-left: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.mt-5,.my-5 {
    margin-top: 3rem !important
}

.mr-5,.mx-5 {
    margin-right: 3rem !important
}

.mb-5,.my-5 {
    margin-bottom: 3rem !important
}

.ml-5,.mx-5 {
    margin-left: 3rem !important
}

.m-6 {
    margin: 4.5rem !important
}

.mt-6,.my-6 {
    margin-top: 4.5rem !important
}

.mr-6,.mx-6 {
    margin-right: 4.5rem !important
}

.mb-6,.my-6 {
    margin-bottom: 4.5rem !important
}

.ml-6,.mx-6 {
    margin-left: 4.5rem !important
}

.m-7 {
    margin: 6rem !important
}

.mt-7,.my-7 {
    margin-top: 6rem !important
}

.mr-7,.mx-7 {
    margin-right: 6rem !important
}

.mb-7,.my-7 {
    margin-bottom: 6rem !important
}

.ml-7,.mx-7 {
    margin-left: 6rem !important
}

.m-8 {
    margin: 7.5rem !important
}

.mt-8,.my-8 {
    margin-top: 7.5rem !important
}

.mr-8,.mx-8 {
    margin-right: 7.5rem !important
}

.mb-8,.my-8 {
    margin-bottom: 7.5rem !important
}

.ml-8,.mx-8 {
    margin-left: 7.5rem !important
}

.m-9 {
    margin: 9rem !important
}

.mt-9,.my-9 {
    margin-top: 9rem !important
}

.mr-9,.mx-9 {
    margin-right: 9rem !important
}

.mb-9,.my-9 {
    margin-bottom: 9rem !important
}

.ml-9,.mx-9 {
    margin-left: 9rem !important
}

.m-10 {
    margin: 10.5rem !important
}

.mt-10,.my-10 {
    margin-top: 10.5rem !important
}

.mr-10,.mx-10 {
    margin-right: 10.5rem !important
}

.mb-10,.my-10 {
    margin-bottom: 10.5rem !important
}

.ml-10,.mx-10 {
    margin-left: 10.5rem !important
}

.p-0 {
    padding: 0 !important
}

.pt-0,.py-0 {
    padding-top: 0 !important
}

.pr-0,.px-0 {
    padding-right: 0 !important
}

.pb-0,.py-0 {
    padding-bottom: 0 !important
}

.pl-0,.px-0 {
    padding-left: 0 !important
}

.p-1 {
    padding: 0.25rem !important
}

.pt-1,.py-1 {
    padding-top: 0.25rem !important
}

.pr-1,.px-1 {
    padding-right: 0.25rem !important
}

.pb-1,.py-1 {
    padding-bottom: 0.25rem !important
}

.pl-1,.px-1 {
    padding-left: 0.25rem !important
}

.p-2 {
    padding: 0.5rem !important
}

.pt-2,.py-2 {
    padding-top: 0.5rem !important
}

.pr-2,.px-2 {
    padding-right: 0.5rem !important
}

.pb-2,.py-2 {
    padding-bottom: 0.5rem !important
}

.pl-2,.px-2 {
    padding-left: 0.5rem !important
}

.p-3 {
    padding: 1rem !important
}

.pt-3,.py-3 {
    padding-top: 1rem !important
}

.pr-3,.px-3 {
    padding-right: 1rem !important
}

.pb-3,.py-3 {
    padding-bottom: 1rem !important
}

.pl-3,.px-3 {
    padding-left: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.pt-4,.py-4 {
    padding-top: 1.5rem !important
}

.pr-4,.px-4 {
    padding-right: 1.5rem !important
}

.pb-4,.py-4 {
    padding-bottom: 1.5rem !important
}

.pl-4,.px-4 {
    padding-left: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.pt-5,.py-5 {
    padding-top: 3rem !important
}

.pr-5,.px-5 {
    padding-right: 3rem !important
}

.pb-5,.py-5 {
    padding-bottom: 3rem !important
}

.pl-5,.px-5 {
    padding-left: 3rem !important
}

.p-6 {
    padding: 4.5rem !important
}

.pt-6,.py-6 {
    padding-top: 4.5rem !important
}

.pr-6,.px-6 {
    padding-right: 4.5rem !important
}

.pb-6,.py-6 {
    padding-bottom: 4.5rem !important
}

.pl-6,.px-6 {
    padding-left: 4.5rem !important
}

.p-7 {
    padding: 6rem !important
}

.pt-7,.py-7 {
    padding-top: 6rem !important
}

.pr-7,.px-7 {
    padding-right: 6rem !important
}

.pb-7,.py-7 {
    padding-bottom: 6rem !important
}

.pl-7,.px-7 {
    padding-left: 6rem !important
}

.p-8 {
    padding: 7.5rem !important
}

.pt-8,.py-8 {
    padding-top: 7.5rem !important
}

.pr-8,.px-8 {
    padding-right: 7.5rem !important
}

.pb-8,.py-8 {
    padding-bottom: 7.5rem !important
}

.pl-8,.px-8 {
    padding-left: 7.5rem !important
}

.p-9 {
    padding: 9rem !important
}

.pt-9,.py-9 {
    padding-top: 9rem !important
}

.pr-9,.px-9 {
    padding-right: 9rem !important
}

.pb-9,.py-9 {
    padding-bottom: 9rem !important
}

.pl-9,.px-9 {
    padding-left: 9rem !important
}

.p-10 {
    padding: 10.5rem !important
}

.pt-10,.py-10 {
    padding-top: 10.5rem !important
}

.pr-10,.px-10 {
    padding-right: 10.5rem !important
}

.pb-10,.py-10 {
    padding-bottom: 10.5rem !important
}

.pl-10,.px-10 {
    padding-left: 10.5rem !important
}

.m-n1 {
    margin: -0.25rem !important
}

.mt-n1,.my-n1 {
    margin-top: -0.25rem !important
}

.mr-n1,.mx-n1 {
    margin-right: -0.25rem !important
}

.mb-n1,.my-n1 {
    margin-bottom: -0.25rem !important
}

.ml-n1,.mx-n1 {
    margin-left: -0.25rem !important
}

.m-n2 {
    margin: -0.5rem !important
}

.mt-n2,.my-n2 {
    margin-top: -0.5rem !important
}

.mr-n2,.mx-n2 {
    margin-right: -0.5rem !important
}

.mb-n2,.my-n2 {
    margin-bottom: -0.5rem !important
}

.ml-n2,.mx-n2 {
    margin-left: -0.5rem !important
}

.m-n3 {
    margin: -1rem !important
}

.mt-n3,.my-n3 {
    margin-top: -1rem !important
}

.mr-n3,.mx-n3 {
    margin-right: -1rem !important
}

.mb-n3,.my-n3 {
    margin-bottom: -1rem !important
}

.ml-n3,.mx-n3 {
    margin-left: -1rem !important
}

.m-n4 {
    margin: -1.5rem !important
}

.mt-n4,.my-n4 {
    margin-top: -1.5rem !important
}

.mr-n4,.mx-n4 {
    margin-right: -1.5rem !important
}

.mb-n4,.my-n4 {
    margin-bottom: -1.5rem !important
}

.ml-n4,.mx-n4 {
    margin-left: -1.5rem !important
}

.m-n5 {
    margin: -3rem !important
}

.mt-n5,.my-n5 {
    margin-top: -3rem !important
}

.mr-n5,.mx-n5 {
    margin-right: -3rem !important
}

.mb-n5,.my-n5 {
    margin-bottom: -3rem !important
}

.ml-n5,.mx-n5 {
    margin-left: -3rem !important
}

.m-n6 {
    margin: -4.5rem !important
}

.mt-n6,.my-n6 {
    margin-top: -4.5rem !important
}

.mr-n6,.mx-n6 {
    margin-right: -4.5rem !important
}

.mb-n6,.my-n6 {
    margin-bottom: -4.5rem !important
}

.ml-n6,.mx-n6 {
    margin-left: -4.5rem !important
}

.m-n7 {
    margin: -6rem !important
}

.mt-n7,.my-n7 {
    margin-top: -6rem !important
}

.mr-n7,.mx-n7 {
    margin-right: -6rem !important
}

.mb-n7,.my-n7 {
    margin-bottom: -6rem !important
}

.ml-n7,.mx-n7 {
    margin-left: -6rem !important
}

.m-n8 {
    margin: -7.5rem !important
}

.mt-n8,.my-n8 {
    margin-top: -7.5rem !important
}

.mr-n8,.mx-n8 {
    margin-right: -7.5rem !important
}

.mb-n8,.my-n8 {
    margin-bottom: -7.5rem !important
}

.ml-n8,.mx-n8 {
    margin-left: -7.5rem !important
}

.m-n9 {
    margin: -9rem !important
}

.mt-n9,.my-n9 {
    margin-top: -9rem !important
}

.mr-n9,.mx-n9 {
    margin-right: -9rem !important
}

.mb-n9,.my-n9 {
    margin-bottom: -9rem !important
}

.ml-n9,.mx-n9 {
    margin-left: -9rem !important
}

.m-n10 {
    margin: -10.5rem !important
}

.mt-n10,.my-n10 {
    margin-top: -10.5rem !important
}

.mr-n10,.mx-n10 {
    margin-right: -10.5rem !important
}

.mb-n10,.my-n10 {
    margin-bottom: -10.5rem !important
}

.ml-n10,.mx-n10 {
    margin-left: -10.5rem !important
}

.m-auto {
    margin: auto !important
}

.mt-auto,.my-auto {
    margin-top: auto !important
}

.mr-auto,.mx-auto {
    margin-right: auto !important
}

.mb-auto,.my-auto {
    margin-bottom: auto !important
}

.ml-auto,.mx-auto {
    margin-left: auto !important
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin:0 !important
    }

    .mt-sm-0,.my-sm-0 {
        margin-top: 0 !important
    }

    .mr-sm-0,.mx-sm-0 {
        margin-right: 0 !important
    }

    .mb-sm-0,.my-sm-0 {
        margin-bottom: 0 !important
    }

    .ml-sm-0,.mx-sm-0 {
        margin-left: 0 !important
    }

    .m-sm-1 {
        margin: 0.25rem !important
    }

    .mt-sm-1,.my-sm-1 {
        margin-top: 0.25rem !important
    }

    .mr-sm-1,.mx-sm-1 {
        margin-right: 0.25rem !important
    }

    .mb-sm-1,.my-sm-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-sm-1,.mx-sm-1 {
        margin-left: 0.25rem !important
    }

    .m-sm-2 {
        margin: 0.5rem !important
    }

    .mt-sm-2,.my-sm-2 {
        margin-top: 0.5rem !important
    }

    .mr-sm-2,.mx-sm-2 {
        margin-right: 0.5rem !important
    }

    .mb-sm-2,.my-sm-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-sm-2,.mx-sm-2 {
        margin-left: 0.5rem !important
    }

    .m-sm-3 {
        margin: 1rem !important
    }

    .mt-sm-3,.my-sm-3 {
        margin-top: 1rem !important
    }

    .mr-sm-3,.mx-sm-3 {
        margin-right: 1rem !important
    }

    .mb-sm-3,.my-sm-3 {
        margin-bottom: 1rem !important
    }

    .ml-sm-3,.mx-sm-3 {
        margin-left: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .mt-sm-4,.my-sm-4 {
        margin-top: 1.5rem !important
    }

    .mr-sm-4,.mx-sm-4 {
        margin-right: 1.5rem !important
    }

    .mb-sm-4,.my-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-sm-4,.mx-sm-4 {
        margin-left: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .mt-sm-5,.my-sm-5 {
        margin-top: 3rem !important
    }

    .mr-sm-5,.mx-sm-5 {
        margin-right: 3rem !important
    }

    .mb-sm-5,.my-sm-5 {
        margin-bottom: 3rem !important
    }

    .ml-sm-5,.mx-sm-5 {
        margin-left: 3rem !important
    }

    .m-sm-6 {
        margin: 4.5rem !important
    }

    .mt-sm-6,.my-sm-6 {
        margin-top: 4.5rem !important
    }

    .mr-sm-6,.mx-sm-6 {
        margin-right: 4.5rem !important
    }

    .mb-sm-6,.my-sm-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-sm-6,.mx-sm-6 {
        margin-left: 4.5rem !important
    }

    .m-sm-7 {
        margin: 6rem !important
    }

    .mt-sm-7,.my-sm-7 {
        margin-top: 6rem !important
    }

    .mr-sm-7,.mx-sm-7 {
        margin-right: 6rem !important
    }

    .mb-sm-7,.my-sm-7 {
        margin-bottom: 6rem !important
    }

    .ml-sm-7,.mx-sm-7 {
        margin-left: 6rem !important
    }

    .m-sm-8 {
        margin: 7.5rem !important
    }

    .mt-sm-8,.my-sm-8 {
        margin-top: 7.5rem !important
    }

    .mr-sm-8,.mx-sm-8 {
        margin-right: 7.5rem !important
    }

    .mb-sm-8,.my-sm-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-sm-8,.mx-sm-8 {
        margin-left: 7.5rem !important
    }

    .m-sm-9 {
        margin: 9rem !important
    }

    .mt-sm-9,.my-sm-9 {
        margin-top: 9rem !important
    }

    .mr-sm-9,.mx-sm-9 {
        margin-right: 9rem !important
    }

    .mb-sm-9,.my-sm-9 {
        margin-bottom: 9rem !important
    }

    .ml-sm-9,.mx-sm-9 {
        margin-left: 9rem !important
    }

    .m-sm-10 {
        margin: 10.5rem !important
    }

    .mt-sm-10,.my-sm-10 {
        margin-top: 10.5rem !important
    }

    .mr-sm-10,.mx-sm-10 {
        margin-right: 10.5rem !important
    }

    .mb-sm-10,.my-sm-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-sm-10,.mx-sm-10 {
        margin-left: 10.5rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .pt-sm-0,.py-sm-0 {
        padding-top: 0 !important
    }

    .pr-sm-0,.px-sm-0 {
        padding-right: 0 !important
    }

    .pb-sm-0,.py-sm-0 {
        padding-bottom: 0 !important
    }

    .pl-sm-0,.px-sm-0 {
        padding-left: 0 !important
    }

    .p-sm-1 {
        padding: 0.25rem !important
    }

    .pt-sm-1,.py-sm-1 {
        padding-top: 0.25rem !important
    }

    .pr-sm-1,.px-sm-1 {
        padding-right: 0.25rem !important
    }

    .pb-sm-1,.py-sm-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-sm-1,.px-sm-1 {
        padding-left: 0.25rem !important
    }

    .p-sm-2 {
        padding: 0.5rem !important
    }

    .pt-sm-2,.py-sm-2 {
        padding-top: 0.5rem !important
    }

    .pr-sm-2,.px-sm-2 {
        padding-right: 0.5rem !important
    }

    .pb-sm-2,.py-sm-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-sm-2,.px-sm-2 {
        padding-left: 0.5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .pt-sm-3,.py-sm-3 {
        padding-top: 1rem !important
    }

    .pr-sm-3,.px-sm-3 {
        padding-right: 1rem !important
    }

    .pb-sm-3,.py-sm-3 {
        padding-bottom: 1rem !important
    }

    .pl-sm-3,.px-sm-3 {
        padding-left: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .pt-sm-4,.py-sm-4 {
        padding-top: 1.5rem !important
    }

    .pr-sm-4,.px-sm-4 {
        padding-right: 1.5rem !important
    }

    .pb-sm-4,.py-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-sm-4,.px-sm-4 {
        padding-left: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .pt-sm-5,.py-sm-5 {
        padding-top: 3rem !important
    }

    .pr-sm-5,.px-sm-5 {
        padding-right: 3rem !important
    }

    .pb-sm-5,.py-sm-5 {
        padding-bottom: 3rem !important
    }

    .pl-sm-5,.px-sm-5 {
        padding-left: 3rem !important
    }

    .p-sm-6 {
        padding: 4.5rem !important
    }

    .pt-sm-6,.py-sm-6 {
        padding-top: 4.5rem !important
    }

    .pr-sm-6,.px-sm-6 {
        padding-right: 4.5rem !important
    }

    .pb-sm-6,.py-sm-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-sm-6,.px-sm-6 {
        padding-left: 4.5rem !important
    }

    .p-sm-7 {
        padding: 6rem !important
    }

    .pt-sm-7,.py-sm-7 {
        padding-top: 6rem !important
    }

    .pr-sm-7,.px-sm-7 {
        padding-right: 6rem !important
    }

    .pb-sm-7,.py-sm-7 {
        padding-bottom: 6rem !important
    }

    .pl-sm-7,.px-sm-7 {
        padding-left: 6rem !important
    }

    .p-sm-8 {
        padding: 7.5rem !important
    }

    .pt-sm-8,.py-sm-8 {
        padding-top: 7.5rem !important
    }

    .pr-sm-8,.px-sm-8 {
        padding-right: 7.5rem !important
    }

    .pb-sm-8,.py-sm-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-sm-8,.px-sm-8 {
        padding-left: 7.5rem !important
    }

    .p-sm-9 {
        padding: 9rem !important
    }

    .pt-sm-9,.py-sm-9 {
        padding-top: 9rem !important
    }

    .pr-sm-9,.px-sm-9 {
        padding-right: 9rem !important
    }

    .pb-sm-9,.py-sm-9 {
        padding-bottom: 9rem !important
    }

    .pl-sm-9,.px-sm-9 {
        padding-left: 9rem !important
    }

    .p-sm-10 {
        padding: 10.5rem !important
    }

    .pt-sm-10,.py-sm-10 {
        padding-top: 10.5rem !important
    }

    .pr-sm-10,.px-sm-10 {
        padding-right: 10.5rem !important
    }

    .pb-sm-10,.py-sm-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-sm-10,.px-sm-10 {
        padding-left: 10.5rem !important
    }

    .m-sm-n1 {
        margin: -0.25rem !important
    }

    .mt-sm-n1,.my-sm-n1 {
        margin-top: -0.25rem !important
    }

    .mr-sm-n1,.mx-sm-n1 {
        margin-right: -0.25rem !important
    }

    .mb-sm-n1,.my-sm-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-sm-n1,.mx-sm-n1 {
        margin-left: -0.25rem !important
    }

    .m-sm-n2 {
        margin: -0.5rem !important
    }

    .mt-sm-n2,.my-sm-n2 {
        margin-top: -0.5rem !important
    }

    .mr-sm-n2,.mx-sm-n2 {
        margin-right: -0.5rem !important
    }

    .mb-sm-n2,.my-sm-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-sm-n2,.mx-sm-n2 {
        margin-left: -0.5rem !important
    }

    .m-sm-n3 {
        margin: -1rem !important
    }

    .mt-sm-n3,.my-sm-n3 {
        margin-top: -1rem !important
    }

    .mr-sm-n3,.mx-sm-n3 {
        margin-right: -1rem !important
    }

    .mb-sm-n3,.my-sm-n3 {
        margin-bottom: -1rem !important
    }

    .ml-sm-n3,.mx-sm-n3 {
        margin-left: -1rem !important
    }

    .m-sm-n4 {
        margin: -1.5rem !important
    }

    .mt-sm-n4,.my-sm-n4 {
        margin-top: -1.5rem !important
    }

    .mr-sm-n4,.mx-sm-n4 {
        margin-right: -1.5rem !important
    }

    .mb-sm-n4,.my-sm-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-sm-n4,.mx-sm-n4 {
        margin-left: -1.5rem !important
    }

    .m-sm-n5 {
        margin: -3rem !important
    }

    .mt-sm-n5,.my-sm-n5 {
        margin-top: -3rem !important
    }

    .mr-sm-n5,.mx-sm-n5 {
        margin-right: -3rem !important
    }

    .mb-sm-n5,.my-sm-n5 {
        margin-bottom: -3rem !important
    }

    .ml-sm-n5,.mx-sm-n5 {
        margin-left: -3rem !important
    }

    .m-sm-n6 {
        margin: -4.5rem !important
    }

    .mt-sm-n6,.my-sm-n6 {
        margin-top: -4.5rem !important
    }

    .mr-sm-n6,.mx-sm-n6 {
        margin-right: -4.5rem !important
    }

    .mb-sm-n6,.my-sm-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-sm-n6,.mx-sm-n6 {
        margin-left: -4.5rem !important
    }

    .m-sm-n7 {
        margin: -6rem !important
    }

    .mt-sm-n7,.my-sm-n7 {
        margin-top: -6rem !important
    }

    .mr-sm-n7,.mx-sm-n7 {
        margin-right: -6rem !important
    }

    .mb-sm-n7,.my-sm-n7 {
        margin-bottom: -6rem !important
    }

    .ml-sm-n7,.mx-sm-n7 {
        margin-left: -6rem !important
    }

    .m-sm-n8 {
        margin: -7.5rem !important
    }

    .mt-sm-n8,.my-sm-n8 {
        margin-top: -7.5rem !important
    }

    .mr-sm-n8,.mx-sm-n8 {
        margin-right: -7.5rem !important
    }

    .mb-sm-n8,.my-sm-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-sm-n8,.mx-sm-n8 {
        margin-left: -7.5rem !important
    }

    .m-sm-n9 {
        margin: -9rem !important
    }

    .mt-sm-n9,.my-sm-n9 {
        margin-top: -9rem !important
    }

    .mr-sm-n9,.mx-sm-n9 {
        margin-right: -9rem !important
    }

    .mb-sm-n9,.my-sm-n9 {
        margin-bottom: -9rem !important
    }

    .ml-sm-n9,.mx-sm-n9 {
        margin-left: -9rem !important
    }

    .m-sm-n10 {
        margin: -10.5rem !important
    }

    .mt-sm-n10,.my-sm-n10 {
        margin-top: -10.5rem !important
    }

    .mr-sm-n10,.mx-sm-n10 {
        margin-right: -10.5rem !important
    }

    .mb-sm-n10,.my-sm-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-sm-n10,.mx-sm-n10 {
        margin-left: -10.5rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mt-sm-auto,.my-sm-auto {
        margin-top: auto !important
    }

    .mr-sm-auto,.mx-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-auto,.my-sm-auto {
        margin-bottom: auto !important
    }

    .ml-sm-auto,.mx-sm-auto {
        margin-left: auto !important
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin:0 !important
    }

    .mt-md-0,.my-md-0 {
        margin-top: 0 !important
    }

    .mr-md-0,.mx-md-0 {
        margin-right: 0 !important
    }

    .mb-md-0,.my-md-0 {
        margin-bottom: 0 !important
    }

    .ml-md-0,.mx-md-0 {
        margin-left: 0 !important
    }

    .m-md-1 {
        margin: 0.25rem !important
    }

    .mt-md-1,.my-md-1 {
        margin-top: 0.25rem !important
    }

    .mr-md-1,.mx-md-1 {
        margin-right: 0.25rem !important
    }

    .mb-md-1,.my-md-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-md-1,.mx-md-1 {
        margin-left: 0.25rem !important
    }

    .m-md-2 {
        margin: 0.5rem !important
    }

    .mt-md-2,.my-md-2 {
        margin-top: 0.5rem !important
    }

    .mr-md-2,.mx-md-2 {
        margin-right: 0.5rem !important
    }

    .mb-md-2,.my-md-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-md-2,.mx-md-2 {
        margin-left: 0.5rem !important
    }

    .m-md-3 {
        margin: 1rem !important
    }

    .mt-md-3,.my-md-3 {
        margin-top: 1rem !important
    }

    .mr-md-3,.mx-md-3 {
        margin-right: 1rem !important
    }

    .mb-md-3,.my-md-3 {
        margin-bottom: 1rem !important
    }

    .ml-md-3,.mx-md-3 {
        margin-left: 1rem !important
    }

    .m-md-4 {
        margin: 1.5rem !important
    }

    .mt-md-4,.my-md-4 {
        margin-top: 1.5rem !important
    }

    .mr-md-4,.mx-md-4 {
        margin-right: 1.5rem !important
    }

    .mb-md-4,.my-md-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-md-4,.mx-md-4 {
        margin-left: 1.5rem !important
    }

    .m-md-5 {
        margin: 3rem !important
    }

    .mt-md-5,.my-md-5 {
        margin-top: 3rem !important
    }

    .mr-md-5,.mx-md-5 {
        margin-right: 3rem !important
    }

    .mb-md-5,.my-md-5 {
        margin-bottom: 3rem !important
    }

    .ml-md-5,.mx-md-5 {
        margin-left: 3rem !important
    }

    .m-md-6 {
        margin: 4.5rem !important
    }

    .mt-md-6,.my-md-6 {
        margin-top: 4.5rem !important
    }

    .mr-md-6,.mx-md-6 {
        margin-right: 4.5rem !important
    }

    .mb-md-6,.my-md-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-md-6,.mx-md-6 {
        margin-left: 4.5rem !important
    }

    .m-md-7 {
        margin: 6rem !important
    }

    .mt-md-7,.my-md-7 {
        margin-top: 6rem !important
    }

    .mr-md-7,.mx-md-7 {
        margin-right: 6rem !important
    }

    .mb-md-7,.my-md-7 {
        margin-bottom: 6rem !important
    }

    .ml-md-7,.mx-md-7 {
        margin-left: 6rem !important
    }

    .m-md-8 {
        margin: 7.5rem !important
    }

    .mt-md-8,.my-md-8 {
        margin-top: 7.5rem !important
    }

    .mr-md-8,.mx-md-8 {
        margin-right: 7.5rem !important
    }

    .mb-md-8,.my-md-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-md-8,.mx-md-8 {
        margin-left: 7.5rem !important
    }

    .m-md-9 {
        margin: 9rem !important
    }

    .mt-md-9,.my-md-9 {
        margin-top: 9rem !important
    }

    .mr-md-9,.mx-md-9 {
        margin-right: 9rem !important
    }

    .mb-md-9,.my-md-9 {
        margin-bottom: 9rem !important
    }

    .ml-md-9,.mx-md-9 {
        margin-left: 9rem !important
    }

    .m-md-10 {
        margin: 10.5rem !important
    }

    .mt-md-10,.my-md-10 {
        margin-top: 10.5rem !important
    }

    .mr-md-10,.mx-md-10 {
        margin-right: 10.5rem !important
    }

    .mb-md-10,.my-md-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-md-10,.mx-md-10 {
        margin-left: 10.5rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .pt-md-0,.py-md-0 {
        padding-top: 0 !important
    }

    .pr-md-0,.px-md-0 {
        padding-right: 0 !important
    }

    .pb-md-0,.py-md-0 {
        padding-bottom: 0 !important
    }

    .pl-md-0,.px-md-0 {
        padding-left: 0 !important
    }

    .p-md-1 {
        padding: 0.25rem !important
    }

    .pt-md-1,.py-md-1 {
        padding-top: 0.25rem !important
    }

    .pr-md-1,.px-md-1 {
        padding-right: 0.25rem !important
    }

    .pb-md-1,.py-md-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-md-1,.px-md-1 {
        padding-left: 0.25rem !important
    }

    .p-md-2 {
        padding: 0.5rem !important
    }

    .pt-md-2,.py-md-2 {
        padding-top: 0.5rem !important
    }

    .pr-md-2,.px-md-2 {
        padding-right: 0.5rem !important
    }

    .pb-md-2,.py-md-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-md-2,.px-md-2 {
        padding-left: 0.5rem !important
    }

    .p-md-3 {
        padding: 1rem !important
    }

    .pt-md-3,.py-md-3 {
        padding-top: 1rem !important
    }

    .pr-md-3,.px-md-3 {
        padding-right: 1rem !important
    }

    .pb-md-3,.py-md-3 {
        padding-bottom: 1rem !important
    }

    .pl-md-3,.px-md-3 {
        padding-left: 1rem !important
    }

    .p-md-4 {
        padding: 1.5rem !important
    }

    .pt-md-4,.py-md-4 {
        padding-top: 1.5rem !important
    }

    .pr-md-4,.px-md-4 {
        padding-right: 1.5rem !important
    }

    .pb-md-4,.py-md-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-md-4,.px-md-4 {
        padding-left: 1.5rem !important
    }

    .p-md-5 {
        padding: 3rem !important
    }

    .pt-md-5,.py-md-5 {
        padding-top: 3rem !important
    }

    .pr-md-5,.px-md-5 {
        padding-right: 3rem !important
    }

    .pb-md-5,.py-md-5 {
        padding-bottom: 3rem !important
    }

    .pl-md-5,.px-md-5 {
        padding-left: 3rem !important
    }

    .p-md-6 {
        padding: 4.5rem !important
    }

    .pt-md-6,.py-md-6 {
        padding-top: 4.5rem !important
    }

    .pr-md-6,.px-md-6 {
        padding-right: 4.5rem !important
    }

    .pb-md-6,.py-md-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-md-6,.px-md-6 {
        padding-left: 4.5rem !important
    }

    .p-md-7 {
        padding: 6rem !important
    }

    .pt-md-7,.py-md-7 {
        padding-top: 6rem !important
    }

    .pr-md-7,.px-md-7 {
        padding-right: 6rem !important
    }

    .pb-md-7,.py-md-7 {
        padding-bottom: 6rem !important
    }

    .pl-md-7,.px-md-7 {
        padding-left: 6rem !important
    }

    .p-md-8 {
        padding: 7.5rem !important
    }

    .pt-md-8,.py-md-8 {
        padding-top: 7.5rem !important
    }

    .pr-md-8,.px-md-8 {
        padding-right: 7.5rem !important
    }

    .pb-md-8,.py-md-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-md-8,.px-md-8 {
        padding-left: 7.5rem !important
    }

    .p-md-9 {
        padding: 9rem !important
    }

    .pt-md-9,.py-md-9 {
        padding-top: 9rem !important
    }

    .pr-md-9,.px-md-9 {
        padding-right: 9rem !important
    }

    .pb-md-9,.py-md-9 {
        padding-bottom: 9rem !important
    }

    .pl-md-9,.px-md-9 {
        padding-left: 9rem !important
    }

    .p-md-10 {
        padding: 10.5rem !important
    }

    .pt-md-10,.py-md-10 {
        padding-top: 10.5rem !important
    }

    .pr-md-10,.px-md-10 {
        padding-right: 10.5rem !important
    }

    .pb-md-10,.py-md-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-md-10,.px-md-10 {
        padding-left: 10.5rem !important
    }

    .m-md-n1 {
        margin: -0.25rem !important
    }

    .mt-md-n1,.my-md-n1 {
        margin-top: -0.25rem !important
    }

    .mr-md-n1,.mx-md-n1 {
        margin-right: -0.25rem !important
    }

    .mb-md-n1,.my-md-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-md-n1,.mx-md-n1 {
        margin-left: -0.25rem !important
    }

    .m-md-n2 {
        margin: -0.5rem !important
    }

    .mt-md-n2,.my-md-n2 {
        margin-top: -0.5rem !important
    }

    .mr-md-n2,.mx-md-n2 {
        margin-right: -0.5rem !important
    }

    .mb-md-n2,.my-md-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-md-n2,.mx-md-n2 {
        margin-left: -0.5rem !important
    }

    .m-md-n3 {
        margin: -1rem !important
    }

    .mt-md-n3,.my-md-n3 {
        margin-top: -1rem !important
    }

    .mr-md-n3,.mx-md-n3 {
        margin-right: -1rem !important
    }

    .mb-md-n3,.my-md-n3 {
        margin-bottom: -1rem !important
    }

    .ml-md-n3,.mx-md-n3 {
        margin-left: -1rem !important
    }

    .m-md-n4 {
        margin: -1.5rem !important
    }

    .mt-md-n4,.my-md-n4 {
        margin-top: -1.5rem !important
    }

    .mr-md-n4,.mx-md-n4 {
        margin-right: -1.5rem !important
    }

    .mb-md-n4,.my-md-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-md-n4,.mx-md-n4 {
        margin-left: -1.5rem !important
    }

    .m-md-n5 {
        margin: -3rem !important
    }

    .mt-md-n5,.my-md-n5 {
        margin-top: -3rem !important
    }

    .mr-md-n5,.mx-md-n5 {
        margin-right: -3rem !important
    }

    .mb-md-n5,.my-md-n5 {
        margin-bottom: -3rem !important
    }

    .ml-md-n5,.mx-md-n5 {
        margin-left: -3rem !important
    }

    .m-md-n6 {
        margin: -4.5rem !important
    }

    .mt-md-n6,.my-md-n6 {
        margin-top: -4.5rem !important
    }

    .mr-md-n6,.mx-md-n6 {
        margin-right: -4.5rem !important
    }

    .mb-md-n6,.my-md-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-md-n6,.mx-md-n6 {
        margin-left: -4.5rem !important
    }

    .m-md-n7 {
        margin: -6rem !important
    }

    .mt-md-n7,.my-md-n7 {
        margin-top: -6rem !important
    }

    .mr-md-n7,.mx-md-n7 {
        margin-right: -6rem !important
    }

    .mb-md-n7,.my-md-n7 {
        margin-bottom: -6rem !important
    }

    .ml-md-n7,.mx-md-n7 {
        margin-left: -6rem !important
    }

    .m-md-n8 {
        margin: -7.5rem !important
    }

    .mt-md-n8,.my-md-n8 {
        margin-top: -7.5rem !important
    }

    .mr-md-n8,.mx-md-n8 {
        margin-right: -7.5rem !important
    }

    .mb-md-n8,.my-md-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-md-n8,.mx-md-n8 {
        margin-left: -7.5rem !important
    }

    .m-md-n9 {
        margin: -9rem !important
    }

    .mt-md-n9,.my-md-n9 {
        margin-top: -9rem !important
    }

    .mr-md-n9,.mx-md-n9 {
        margin-right: -9rem !important
    }

    .mb-md-n9,.my-md-n9 {
        margin-bottom: -9rem !important
    }

    .ml-md-n9,.mx-md-n9 {
        margin-left: -9rem !important
    }

    .m-md-n10 {
        margin: -10.5rem !important
    }

    .mt-md-n10,.my-md-n10 {
        margin-top: -10.5rem !important
    }

    .mr-md-n10,.mx-md-n10 {
        margin-right: -10.5rem !important
    }

    .mb-md-n10,.my-md-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-md-n10,.mx-md-n10 {
        margin-left: -10.5rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mt-md-auto,.my-md-auto {
        margin-top: auto !important
    }

    .mr-md-auto,.mx-md-auto {
        margin-right: auto !important
    }

    .mb-md-auto,.my-md-auto {
        margin-bottom: auto !important
    }

    .ml-md-auto,.mx-md-auto {
        margin-left: auto !important
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin:0 !important
    }

    .mt-lg-0,.my-lg-0 {
        margin-top: 0 !important
    }

    .mr-lg-0,.mx-lg-0 {
        margin-right: 0 !important
    }

    .mb-lg-0,.my-lg-0 {
        margin-bottom: 0 !important
    }

    .ml-lg-0,.mx-lg-0 {
        margin-left: 0 !important
    }

    .m-lg-1 {
        margin: 0.25rem !important
    }

    .mt-lg-1,.my-lg-1 {
        margin-top: 0.25rem !important
    }

    .mr-lg-1,.mx-lg-1 {
        margin-right: 0.25rem !important
    }

    .mb-lg-1,.my-lg-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-lg-1,.mx-lg-1 {
        margin-left: 0.25rem !important
    }

    .m-lg-2 {
        margin: 0.5rem !important
    }

    .mt-lg-2,.my-lg-2 {
        margin-top: 0.5rem !important
    }

    .mr-lg-2,.mx-lg-2 {
        margin-right: 0.5rem !important
    }

    .mb-lg-2,.my-lg-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-lg-2,.mx-lg-2 {
        margin-left: 0.5rem !important
    }

    .m-lg-3 {
        margin: 1rem !important
    }

    .mt-lg-3,.my-lg-3 {
        margin-top: 1rem !important
    }

    .mr-lg-3,.mx-lg-3 {
        margin-right: 1rem !important
    }

    .mb-lg-3,.my-lg-3 {
        margin-bottom: 1rem !important
    }

    .ml-lg-3,.mx-lg-3 {
        margin-left: 1rem !important
    }

    .m-lg-4 {
        margin: 1.5rem !important
    }

    .mt-lg-4,.my-lg-4 {
        margin-top: 1.5rem !important
    }

    .mr-lg-4,.mx-lg-4 {
        margin-right: 1.5rem !important
    }

    .mb-lg-4,.my-lg-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-lg-4,.mx-lg-4 {
        margin-left: 1.5rem !important
    }

    .m-lg-5 {
        margin: 3rem !important
    }

    .mt-lg-5,.my-lg-5 {
        margin-top: 3rem !important
    }

    .mr-lg-5,.mx-lg-5 {
        margin-right: 3rem !important
    }

    .mb-lg-5,.my-lg-5 {
        margin-bottom: 3rem !important
    }

    .ml-lg-5,.mx-lg-5 {
        margin-left: 3rem !important
    }

    .m-lg-6 {
        margin: 4.5rem !important
    }

    .mt-lg-6,.my-lg-6 {
        margin-top: 4.5rem !important
    }

    .mr-lg-6,.mx-lg-6 {
        margin-right: 4.5rem !important
    }

    .mb-lg-6,.my-lg-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-lg-6,.mx-lg-6 {
        margin-left: 4.5rem !important
    }

    .m-lg-7 {
        margin: 6rem !important
    }

    .mt-lg-7,.my-lg-7 {
        margin-top: 6rem !important
    }

    .mr-lg-7,.mx-lg-7 {
        margin-right: 6rem !important
    }

    .mb-lg-7,.my-lg-7 {
        margin-bottom: 6rem !important
    }

    .ml-lg-7,.mx-lg-7 {
        margin-left: 6rem !important
    }

    .m-lg-8 {
        margin: 7.5rem !important
    }

    .mt-lg-8,.my-lg-8 {
        margin-top: 7.5rem !important
    }

    .mr-lg-8,.mx-lg-8 {
        margin-right: 7.5rem !important
    }

    .mb-lg-8,.my-lg-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-lg-8,.mx-lg-8 {
        margin-left: 7.5rem !important
    }

    .m-lg-9 {
        margin: 9rem !important
    }

    .mt-lg-9,.my-lg-9 {
        margin-top: 9rem !important
    }

    .mr-lg-9,.mx-lg-9 {
        margin-right: 9rem !important
    }

    .mb-lg-9,.my-lg-9 {
        margin-bottom: 9rem !important
    }

    .ml-lg-9,.mx-lg-9 {
        margin-left: 9rem !important
    }

    .m-lg-10 {
        margin: 10.5rem !important
    }

    .mt-lg-10,.my-lg-10 {
        margin-top: 10.5rem !important
    }

    .mr-lg-10,.mx-lg-10 {
        margin-right: 10.5rem !important
    }

    .mb-lg-10,.my-lg-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-lg-10,.mx-lg-10 {
        margin-left: 10.5rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .pt-lg-0,.py-lg-0 {
        padding-top: 0 !important
    }

    .pr-lg-0,.px-lg-0 {
        padding-right: 0 !important
    }

    .pb-lg-0,.py-lg-0 {
        padding-bottom: 0 !important
    }

    .pl-lg-0,.px-lg-0 {
        padding-left: 0 !important
    }

    .p-lg-1 {
        padding: 0.25rem !important
    }

    .pt-lg-1,.py-lg-1 {
        padding-top: 0.25rem !important
    }

    .pr-lg-1,.px-lg-1 {
        padding-right: 0.25rem !important
    }

    .pb-lg-1,.py-lg-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-lg-1,.px-lg-1 {
        padding-left: 0.25rem !important
    }

    .p-lg-2 {
        padding: 0.5rem !important
    }

    .pt-lg-2,.py-lg-2 {
        padding-top: 0.5rem !important
    }

    .pr-lg-2,.px-lg-2 {
        padding-right: 0.5rem !important
    }

    .pb-lg-2,.py-lg-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-lg-2,.px-lg-2 {
        padding-left: 0.5rem !important
    }

    .p-lg-3 {
        padding: 1rem !important
    }

    .pt-lg-3,.py-lg-3 {
        padding-top: 1rem !important
    }

    .pr-lg-3,.px-lg-3 {
        padding-right: 1rem !important
    }

    .pb-lg-3,.py-lg-3 {
        padding-bottom: 1rem !important
    }

    .pl-lg-3,.px-lg-3 {
        padding-left: 1rem !important
    }

    .p-lg-4 {
        padding: 1.5rem !important
    }

    .pt-lg-4,.py-lg-4 {
        padding-top: 1.5rem !important
    }

    .pr-lg-4,.px-lg-4 {
        padding-right: 1.5rem !important
    }

    .pb-lg-4,.py-lg-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-lg-4,.px-lg-4 {
        padding-left: 1.5rem !important
    }

    .p-lg-5 {
        padding: 3rem !important
    }

    .pt-lg-5,.py-lg-5 {
        padding-top: 3rem !important
    }

    .pr-lg-5,.px-lg-5 {
        padding-right: 3rem !important
    }

    .pb-lg-5,.py-lg-5 {
        padding-bottom: 3rem !important
    }

    .pl-lg-5,.px-lg-5 {
        padding-left: 3rem !important
    }

    .p-lg-6 {
        padding: 4.5rem !important
    }

    .pt-lg-6,.py-lg-6 {
        padding-top: 4.5rem !important
    }

    .pr-lg-6,.px-lg-6 {
        padding-right: 4.5rem !important
    }

    .pb-lg-6,.py-lg-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-lg-6,.px-lg-6 {
        padding-left: 4.5rem !important
    }

    .p-lg-7 {
        padding: 6rem !important
    }

    .pt-lg-7,.py-lg-7 {
        padding-top: 6rem !important
    }

    .pr-lg-7,.px-lg-7 {
        padding-right: 6rem !important
    }

    .pb-lg-7,.py-lg-7 {
        padding-bottom: 6rem !important
    }

    .pl-lg-7,.px-lg-7 {
        padding-left: 6rem !important
    }

    .p-lg-8 {
        padding: 7.5rem !important
    }

    .pt-lg-8,.py-lg-8 {
        padding-top: 7.5rem !important
    }

    .pr-lg-8,.px-lg-8 {
        padding-right: 7.5rem !important
    }

    .pb-lg-8,.py-lg-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-lg-8,.px-lg-8 {
        padding-left: 7.5rem !important
    }

    .p-lg-9 {
        padding: 9rem !important
    }

    .pt-lg-9,.py-lg-9 {
        padding-top: 9rem !important
    }

    .pr-lg-9,.px-lg-9 {
        padding-right: 9rem !important
    }

    .pb-lg-9,.py-lg-9 {
        padding-bottom: 9rem !important
    }

    .pl-lg-9,.px-lg-9 {
        padding-left: 9rem !important
    }

    .p-lg-10 {
        padding: 10.5rem !important
    }

    .pt-lg-10,.py-lg-10 {
        padding-top: 10.5rem !important
    }

    .pr-lg-10,.px-lg-10 {
        padding-right: 10.5rem !important
    }

    .pb-lg-10,.py-lg-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-lg-10,.px-lg-10 {
        padding-left: 10.5rem !important
    }

    .m-lg-n1 {
        margin: -0.25rem !important
    }

    .mt-lg-n1,.my-lg-n1 {
        margin-top: -0.25rem !important
    }

    .mr-lg-n1,.mx-lg-n1 {
        margin-right: -0.25rem !important
    }

    .mb-lg-n1,.my-lg-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-lg-n1,.mx-lg-n1 {
        margin-left: -0.25rem !important
    }

    .m-lg-n2 {
        margin: -0.5rem !important
    }

    .mt-lg-n2,.my-lg-n2 {
        margin-top: -0.5rem !important
    }

    .mr-lg-n2,.mx-lg-n2 {
        margin-right: -0.5rem !important
    }

    .mb-lg-n2,.my-lg-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-lg-n2,.mx-lg-n2 {
        margin-left: -0.5rem !important
    }

    .m-lg-n3 {
        margin: -1rem !important
    }

    .mt-lg-n3,.my-lg-n3 {
        margin-top: -1rem !important
    }

    .mr-lg-n3,.mx-lg-n3 {
        margin-right: -1rem !important
    }

    .mb-lg-n3,.my-lg-n3 {
        margin-bottom: -1rem !important
    }

    .ml-lg-n3,.mx-lg-n3 {
        margin-left: -1rem !important
    }

    .m-lg-n4 {
        margin: -1.5rem !important
    }

    .mt-lg-n4,.my-lg-n4 {
        margin-top: -1.5rem !important
    }

    .mr-lg-n4,.mx-lg-n4 {
        margin-right: -1.5rem !important
    }

    .mb-lg-n4,.my-lg-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-lg-n4,.mx-lg-n4 {
        margin-left: -1.5rem !important
    }

    .m-lg-n5 {
        margin: -3rem !important
    }

    .mt-lg-n5,.my-lg-n5 {
        margin-top: -3rem !important
    }

    .mr-lg-n5,.mx-lg-n5 {
        margin-right: -3rem !important
    }

    .mb-lg-n5,.my-lg-n5 {
        margin-bottom: -3rem !important
    }

    .ml-lg-n5,.mx-lg-n5 {
        margin-left: -3rem !important
    }

    .m-lg-n6 {
        margin: -4.5rem !important
    }

    .mt-lg-n6,.my-lg-n6 {
        margin-top: -4.5rem !important
    }

    .mr-lg-n6,.mx-lg-n6 {
        margin-right: -4.5rem !important
    }

    .mb-lg-n6,.my-lg-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-lg-n6,.mx-lg-n6 {
        margin-left: -4.5rem !important
    }

    .m-lg-n7 {
        margin: -6rem !important
    }

    .mt-lg-n7,.my-lg-n7 {
        margin-top: -6rem !important
    }

    .mr-lg-n7,.mx-lg-n7 {
        margin-right: -6rem !important
    }

    .mb-lg-n7,.my-lg-n7 {
        margin-bottom: -6rem !important
    }

    .ml-lg-n7,.mx-lg-n7 {
        margin-left: -6rem !important
    }

    .m-lg-n8 {
        margin: -7.5rem !important
    }

    .mt-lg-n8,.my-lg-n8 {
        margin-top: -7.5rem !important
    }

    .mr-lg-n8,.mx-lg-n8 {
        margin-right: -7.5rem !important
    }

    .mb-lg-n8,.my-lg-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-lg-n8,.mx-lg-n8 {
        margin-left: -7.5rem !important
    }

    .m-lg-n9 {
        margin: -9rem !important
    }

    .mt-lg-n9,.my-lg-n9 {
        margin-top: -9rem !important
    }

    .mr-lg-n9,.mx-lg-n9 {
        margin-right: -9rem !important
    }

    .mb-lg-n9,.my-lg-n9 {
        margin-bottom: -9rem !important
    }

    .ml-lg-n9,.mx-lg-n9 {
        margin-left: -9rem !important
    }

    .m-lg-n10 {
        margin: -10.5rem !important
    }

    .mt-lg-n10,.my-lg-n10 {
        margin-top: -10.5rem !important
    }

    .mr-lg-n10,.mx-lg-n10 {
        margin-right: -10.5rem !important
    }

    .mb-lg-n10,.my-lg-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-lg-n10,.mx-lg-n10 {
        margin-left: -10.5rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mt-lg-auto,.my-lg-auto {
        margin-top: auto !important
    }

    .mr-lg-auto,.mx-lg-auto {
        margin-right: auto !important
    }

    .mb-lg-auto,.my-lg-auto {
        margin-bottom: auto !important
    }

    .ml-lg-auto,.mx-lg-auto {
        margin-left: auto !important
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin:0 !important
    }

    .mt-xl-0,.my-xl-0 {
        margin-top: 0 !important
    }

    .mr-xl-0,.mx-xl-0 {
        margin-right: 0 !important
    }

    .mb-xl-0,.my-xl-0 {
        margin-bottom: 0 !important
    }

    .ml-xl-0,.mx-xl-0 {
        margin-left: 0 !important
    }

    .m-xl-1 {
        margin: 0.25rem !important
    }

    .mt-xl-1,.my-xl-1 {
        margin-top: 0.25rem !important
    }

    .mr-xl-1,.mx-xl-1 {
        margin-right: 0.25rem !important
    }

    .mb-xl-1,.my-xl-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-xl-1,.mx-xl-1 {
        margin-left: 0.25rem !important
    }

    .m-xl-2 {
        margin: 0.5rem !important
    }

    .mt-xl-2,.my-xl-2 {
        margin-top: 0.5rem !important
    }

    .mr-xl-2,.mx-xl-2 {
        margin-right: 0.5rem !important
    }

    .mb-xl-2,.my-xl-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-xl-2,.mx-xl-2 {
        margin-left: 0.5rem !important
    }

    .m-xl-3 {
        margin: 1rem !important
    }

    .mt-xl-3,.my-xl-3 {
        margin-top: 1rem !important
    }

    .mr-xl-3,.mx-xl-3 {
        margin-right: 1rem !important
    }

    .mb-xl-3,.my-xl-3 {
        margin-bottom: 1rem !important
    }

    .ml-xl-3,.mx-xl-3 {
        margin-left: 1rem !important
    }

    .m-xl-4 {
        margin: 1.5rem !important
    }

    .mt-xl-4,.my-xl-4 {
        margin-top: 1.5rem !important
    }

    .mr-xl-4,.mx-xl-4 {
        margin-right: 1.5rem !important
    }

    .mb-xl-4,.my-xl-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-xl-4,.mx-xl-4 {
        margin-left: 1.5rem !important
    }

    .m-xl-5 {
        margin: 3rem !important
    }

    .mt-xl-5,.my-xl-5 {
        margin-top: 3rem !important
    }

    .mr-xl-5,.mx-xl-5 {
        margin-right: 3rem !important
    }

    .mb-xl-5,.my-xl-5 {
        margin-bottom: 3rem !important
    }

    .ml-xl-5,.mx-xl-5 {
        margin-left: 3rem !important
    }

    .m-xl-6 {
        margin: 4.5rem !important
    }

    .mt-xl-6,.my-xl-6 {
        margin-top: 4.5rem !important
    }

    .mr-xl-6,.mx-xl-6 {
        margin-right: 4.5rem !important
    }

    .mb-xl-6,.my-xl-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-xl-6,.mx-xl-6 {
        margin-left: 4.5rem !important
    }

    .m-xl-7 {
        margin: 6rem !important
    }

    .mt-xl-7,.my-xl-7 {
        margin-top: 6rem !important
    }

    .mr-xl-7,.mx-xl-7 {
        margin-right: 6rem !important
    }

    .mb-xl-7,.my-xl-7 {
        margin-bottom: 6rem !important
    }

    .ml-xl-7,.mx-xl-7 {
        margin-left: 6rem !important
    }

    .m-xl-8 {
        margin: 7.5rem !important
    }

    .mt-xl-8,.my-xl-8 {
        margin-top: 7.5rem !important
    }

    .mr-xl-8,.mx-xl-8 {
        margin-right: 7.5rem !important
    }

    .mb-xl-8,.my-xl-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-xl-8,.mx-xl-8 {
        margin-left: 7.5rem !important
    }

    .m-xl-9 {
        margin: 9rem !important
    }

    .mt-xl-9,.my-xl-9 {
        margin-top: 9rem !important
    }

    .mr-xl-9,.mx-xl-9 {
        margin-right: 9rem !important
    }

    .mb-xl-9,.my-xl-9 {
        margin-bottom: 9rem !important
    }

    .ml-xl-9,.mx-xl-9 {
        margin-left: 9rem !important
    }

    .m-xl-10 {
        margin: 10.5rem !important
    }

    .mt-xl-10,.my-xl-10 {
        margin-top: 10.5rem !important
    }

    .mr-xl-10,.mx-xl-10 {
        margin-right: 10.5rem !important
    }

    .mb-xl-10,.my-xl-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-xl-10,.mx-xl-10 {
        margin-left: 10.5rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .pt-xl-0,.py-xl-0 {
        padding-top: 0 !important
    }

    .pr-xl-0,.px-xl-0 {
        padding-right: 0 !important
    }

    .pb-xl-0,.py-xl-0 {
        padding-bottom: 0 !important
    }

    .pl-xl-0,.px-xl-0 {
        padding-left: 0 !important
    }

    .p-xl-1 {
        padding: 0.25rem !important
    }

    .pt-xl-1,.py-xl-1 {
        padding-top: 0.25rem !important
    }

    .pr-xl-1,.px-xl-1 {
        padding-right: 0.25rem !important
    }

    .pb-xl-1,.py-xl-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-xl-1,.px-xl-1 {
        padding-left: 0.25rem !important
    }

    .p-xl-2 {
        padding: 0.5rem !important
    }

    .pt-xl-2,.py-xl-2 {
        padding-top: 0.5rem !important
    }

    .pr-xl-2,.px-xl-2 {
        padding-right: 0.5rem !important
    }

    .pb-xl-2,.py-xl-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-xl-2,.px-xl-2 {
        padding-left: 0.5rem !important
    }

    .p-xl-3 {
        padding: 1rem !important
    }

    .pt-xl-3,.py-xl-3 {
        padding-top: 1rem !important
    }

    .pr-xl-3,.px-xl-3 {
        padding-right: 1rem !important
    }

    .pb-xl-3,.py-xl-3 {
        padding-bottom: 1rem !important
    }

    .pl-xl-3,.px-xl-3 {
        padding-left: 1rem !important
    }

    .p-xl-4 {
        padding: 1.5rem !important
    }

    .pt-xl-4,.py-xl-4 {
        padding-top: 1.5rem !important
    }

    .pr-xl-4,.px-xl-4 {
        padding-right: 1.5rem !important
    }

    .pb-xl-4,.py-xl-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-xl-4,.px-xl-4 {
        padding-left: 1.5rem !important
    }

    .p-xl-5 {
        padding: 3rem !important
    }

    .pt-xl-5,.py-xl-5 {
        padding-top: 3rem !important
    }

    .pr-xl-5,.px-xl-5 {
        padding-right: 3rem !important
    }

    .pb-xl-5,.py-xl-5 {
        padding-bottom: 3rem !important
    }

    .pl-xl-5,.px-xl-5 {
        padding-left: 3rem !important
    }

    .p-xl-6 {
        padding: 4.5rem !important
    }

    .pt-xl-6,.py-xl-6 {
        padding-top: 4.5rem !important
    }

    .pr-xl-6,.px-xl-6 {
        padding-right: 4.5rem !important
    }

    .pb-xl-6,.py-xl-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-xl-6,.px-xl-6 {
        padding-left: 4.5rem !important
    }

    .p-xl-7 {
        padding: 6rem !important
    }

    .pt-xl-7,.py-xl-7 {
        padding-top: 6rem !important
    }

    .pr-xl-7,.px-xl-7 {
        padding-right: 6rem !important
    }

    .pb-xl-7,.py-xl-7 {
        padding-bottom: 6rem !important
    }

    .pl-xl-7,.px-xl-7 {
        padding-left: 6rem !important
    }

    .p-xl-8 {
        padding: 7.5rem !important
    }

    .pt-xl-8,.py-xl-8 {
        padding-top: 7.5rem !important
    }

    .pr-xl-8,.px-xl-8 {
        padding-right: 7.5rem !important
    }

    .pb-xl-8,.py-xl-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-xl-8,.px-xl-8 {
        padding-left: 7.5rem !important
    }

    .p-xl-9 {
        padding: 9rem !important
    }

    .pt-xl-9,.py-xl-9 {
        padding-top: 9rem !important
    }

    .pr-xl-9,.px-xl-9 {
        padding-right: 9rem !important
    }

    .pb-xl-9,.py-xl-9 {
        padding-bottom: 9rem !important
    }

    .pl-xl-9,.px-xl-9 {
        padding-left: 9rem !important
    }

    .p-xl-10 {
        padding: 10.5rem !important
    }

    .pt-xl-10,.py-xl-10 {
        padding-top: 10.5rem !important
    }

    .pr-xl-10,.px-xl-10 {
        padding-right: 10.5rem !important
    }

    .pb-xl-10,.py-xl-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-xl-10,.px-xl-10 {
        padding-left: 10.5rem !important
    }

    .m-xl-n1 {
        margin: -0.25rem !important
    }

    .mt-xl-n1,.my-xl-n1 {
        margin-top: -0.25rem !important
    }

    .mr-xl-n1,.mx-xl-n1 {
        margin-right: -0.25rem !important
    }

    .mb-xl-n1,.my-xl-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-xl-n1,.mx-xl-n1 {
        margin-left: -0.25rem !important
    }

    .m-xl-n2 {
        margin: -0.5rem !important
    }

    .mt-xl-n2,.my-xl-n2 {
        margin-top: -0.5rem !important
    }

    .mr-xl-n2,.mx-xl-n2 {
        margin-right: -0.5rem !important
    }

    .mb-xl-n2,.my-xl-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-xl-n2,.mx-xl-n2 {
        margin-left: -0.5rem !important
    }

    .m-xl-n3 {
        margin: -1rem !important
    }

    .mt-xl-n3,.my-xl-n3 {
        margin-top: -1rem !important
    }

    .mr-xl-n3,.mx-xl-n3 {
        margin-right: -1rem !important
    }

    .mb-xl-n3,.my-xl-n3 {
        margin-bottom: -1rem !important
    }

    .ml-xl-n3,.mx-xl-n3 {
        margin-left: -1rem !important
    }

    .m-xl-n4 {
        margin: -1.5rem !important
    }

    .mt-xl-n4,.my-xl-n4 {
        margin-top: -1.5rem !important
    }

    .mr-xl-n4,.mx-xl-n4 {
        margin-right: -1.5rem !important
    }

    .mb-xl-n4,.my-xl-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-xl-n4,.mx-xl-n4 {
        margin-left: -1.5rem !important
    }

    .m-xl-n5 {
        margin: -3rem !important
    }

    .mt-xl-n5,.my-xl-n5 {
        margin-top: -3rem !important
    }

    .mr-xl-n5,.mx-xl-n5 {
        margin-right: -3rem !important
    }

    .mb-xl-n5,.my-xl-n5 {
        margin-bottom: -3rem !important
    }

    .ml-xl-n5,.mx-xl-n5 {
        margin-left: -3rem !important
    }

    .m-xl-n6 {
        margin: -4.5rem !important
    }

    .mt-xl-n6,.my-xl-n6 {
        margin-top: -4.5rem !important
    }

    .mr-xl-n6,.mx-xl-n6 {
        margin-right: -4.5rem !important
    }

    .mb-xl-n6,.my-xl-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-xl-n6,.mx-xl-n6 {
        margin-left: -4.5rem !important
    }

    .m-xl-n7 {
        margin: -6rem !important
    }

    .mt-xl-n7,.my-xl-n7 {
        margin-top: -6rem !important
    }

    .mr-xl-n7,.mx-xl-n7 {
        margin-right: -6rem !important
    }

    .mb-xl-n7,.my-xl-n7 {
        margin-bottom: -6rem !important
    }

    .ml-xl-n7,.mx-xl-n7 {
        margin-left: -6rem !important
    }

    .m-xl-n8 {
        margin: -7.5rem !important
    }

    .mt-xl-n8,.my-xl-n8 {
        margin-top: -7.5rem !important
    }

    .mr-xl-n8,.mx-xl-n8 {
        margin-right: -7.5rem !important
    }

    .mb-xl-n8,.my-xl-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-xl-n8,.mx-xl-n8 {
        margin-left: -7.5rem !important
    }

    .m-xl-n9 {
        margin: -9rem !important
    }

    .mt-xl-n9,.my-xl-n9 {
        margin-top: -9rem !important
    }

    .mr-xl-n9,.mx-xl-n9 {
        margin-right: -9rem !important
    }

    .mb-xl-n9,.my-xl-n9 {
        margin-bottom: -9rem !important
    }

    .ml-xl-n9,.mx-xl-n9 {
        margin-left: -9rem !important
    }

    .m-xl-n10 {
        margin: -10.5rem !important
    }

    .mt-xl-n10,.my-xl-n10 {
        margin-top: -10.5rem !important
    }

    .mr-xl-n10,.mx-xl-n10 {
        margin-right: -10.5rem !important
    }

    .mb-xl-n10,.my-xl-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-xl-n10,.mx-xl-n10 {
        margin-left: -10.5rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mt-xl-auto,.my-xl-auto {
        margin-top: auto !important
    }

    .mr-xl-auto,.mx-xl-auto {
        margin-right: auto !important
    }

    .mb-xl-auto,.my-xl-auto {
        margin-bottom: auto !important
    }

    .ml-xl-auto,.mx-xl-auto {
        margin-left: auto !important
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace !important
}

.text-justify {
    text-align: justify !important
}

.text-wrap {
    white-space: normal !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left !important
}

.text-right {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align:left !important
    }

    .text-sm-right {
        text-align: right !important
    }

    .text-sm-center {
        text-align: center !important
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align:left !important
    }

    .text-md-right {
        text-align: right !important
    }

    .text-md-center {
        text-align: center !important
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align:left !important
    }

    .text-lg-right {
        text-align: right !important
    }

    .text-lg-center {
        text-align: center !important
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align:left !important
    }

    .text-xl-right {
        text-align: right !important
    }

    .text-xl-center {
        text-align: center !important
    }
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.font-weight-light {
    font-weight: 300 !important
}

.font-weight-lighter {
    font-weight: lighter !important
}

.font-weight-normal {
    font-weight: 400 !important
}

.font-weight-bold {
    font-weight: 700 !important
}

.font-weight-bolder {
    font-weight: bolder !important
}

.font-italic {
    font-style: italic !important
}

.text-white {
    color: #fff !important
}

.text-primary {
    color: #007bff !important
}

a.text-primary:hover,a.text-primary:focus {
    color: #0056b3 !important
}

.text-secondary {
    color: #6c757d !important
}

a.text-secondary:hover,a.text-secondary:focus {
    color: #494f54 !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:hover,a.text-success:focus {
    color: #19692c !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:hover,a.text-info:focus {
    color: #0f6674 !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:hover,a.text-warning:focus {
    color: #ba8b00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:hover,a.text-danger:focus {
    color: #a71d2a !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:hover,a.text-light:focus {
    color: #cbd3da !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:hover,a.text-dark:focus {
    color: #121416 !important
}

.text-body {
    color: #212529 !important
}

.text-muted {
    color: #6c757d !important
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.text-decoration-none {
    text-decoration: none !important
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important
}

.text-reset {
    color: inherit !important
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

@media print {
    *,*::before,*::after {
        text-shadow: none !important;
        box-shadow: none !important
    }

    a:not(.btn) {
        text-decoration: underline
    }

    abbr[title]::after {
        content: \" (\" attr(title) \")\"
    }

    pre {
        white-space: pre-wrap !important
    }

    pre,blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    tr,img {
        page-break-inside: avoid
    }

    p,h2,h3 {
        orphans: 3;
        widows: 3
    }

    h2,h3 {
        page-break-after: avoid
    }

    @page {
        size: a3
    }

    body {
        min-width: 992px !important
    }

    .container {
        min-width: 992px !important
    }

    .navbar {
        display: none
    }

    .badge {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table td,.table th {
        background-color: #fff !important
    }

    .table-bordered th,.table-bordered td {
        border: 1px solid #dee2e6 !important
    }

    .table-dark {
        color: inherit
    }

    .table-dark th,.table-dark td,.table-dark thead th,.table-dark tbody+tbody {
        border-color: #dee2e6
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6
    }
}

/* normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

body {
    margin: 0
}

article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
    display: block
}

audio,canvas,progress,video {
    display: inline-block;
    vertical-align: baseline;
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],template {
    display: none
}

a {
    background-color: transparent
}

a:active,a:hover {
    outline: 0
}

abbr[title] {
    border-bottom: 1px dotted
}

b,strong {
    font-weight: bold
}

dfn {
    font-style: italic
}

h1 {
    margin: 0.67em 0
}

mark {
    background: #ff0;
    color: #000
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -0.5em
}

sub {
    bottom: -0.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 1em 40px
}

hr {
    box-sizing: content-box;
    height: 0
}

pre {
    overflow: auto
}

code,kbd,pre,samp {
    font-family: monospace, monospace;
    font-size: 1em
}

button,input,optgroup,select,textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}

button {
    overflow: visible
}

button,select {
    text-transform: none
}

button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"] {
    -webkit-appearance: button;
    cursor: pointer;
}

button[disabled],html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input {
    line-height: normal
}

input[type=\"checkbox\"],input[type=\"radio\"] {
    box-sizing: border-box;
    padding: 0;
}

input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button {
    height: auto
}

input[type=\"search\"] {
    -webkit-appearance: textfield;
    box-sizing: content-box;
}

input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em
}

legend {
    border: 0;
    padding: 0;
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: bold
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

td,th {
    padding: 0
}

h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,.h {
    font-weight: bold;
    margin: 0 0 0.5em
}

h1,.h1 {
    font-size: 24px;
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 768px) {
    h1,.h1 {
        font-size:42px
    }
}

@media (min-width: 1330px) {
    h1,.h1 {
        font-size:45px
    }
}

h2,.h2 {
    font-size: 45px
}

@media (min-width: 1330px) {
    h2,.h2 {
        font-size:44px
    }
}

h3,.h3 {
    font-size: 20px
}

@media (min-width: 1024px) {
    h3,.h3 {
        font-size:1.1875rem
    }
}

h4,.h4 {
    font-size: 1.0625rem
}

h5,.h5 {
    font-size: 16px
}

@media (min-width: 1024px) {
    h5,.h5 {
        font-size:1.1538462rem
    }
}

h6,.h6 {
    font-size: 1rem
}

.btn {
    padding: 15px;
    font-size: 14px;
    padding: 6px 18px;
    border-radius: 50px;
    color: #fff;
    font-weight: 800;
    border-color: transparent
}

@media (min-width: 768px) {
    .btn {
        font-size:20px;
        padding: 11px 42px
    }
}

.btn.btn-transparent {
    border-radius: 36px;
    border: 4px solid #fff
}

.btn.btn-transparent-blue {
    border: 3px solid #90dade;
    color: #90dade
}

.btn.btn-transparent-blue:hover {
    color: #fff;
    background-color: #90dade
}

.btn.btn-blue {
    border-radius: 36px;
    background-color: #90dade
}

.btn.btn-primary {
    border-radius: 43px;
    background-color: #3975fc;
    border: 3px solid transparent
}

.btn.btn-primary:hover {
    color: #fff;
    border: 3px solid #3975fc;
    background-color: #3975fc;
    webkit-box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    -webkit-transform: translateY(-1px);
    transform: translateY(-1px)
}

.btn.btn-primary-transparent {
    border-radius: 36px;
    border: 3px solid #3975fc;
    color: #3975fc;
    background-color: transparent
}

.btn.btn-primary-transparent:hover {
    color: #fff;
    background-color: #3975fc
}

.btn.btn-white {
    border-radius: 43px;
    background-color: #fff;
    color: #3975fc
}

.btn.btn-orange-transparent {
    border-radius: 43px;
    border: 3px solid #ff6c4d;
    border-color: #ff6c4d;
    color: #ff6c4d;
    background-color: transparent
}

.btn.btn-orange-transparent:hover {
    background-color: #ff6c4d;
    color: #fff
}

.btn.btn-pink {
    border-radius: 43px;
    background-color: #ffad9f
}

@font-face {
    font-family: 'Centra No1';
    font-weight: bold;
    src: url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.eot');
    src: local('☺'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.woff') format('woff'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.ttf') format('truetype'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.eot');
    src: local('☺'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.woff') format('woff'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.ttf') format('truetype'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.eot');
    src: local('☺'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.woff') format('woff'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.ttf') format('truetype'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Lucky Fellas';
    src: url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.eot');
    src: local('☺'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.woff') format('woff'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.ttf') format('truetype'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'centra_no1black';
    src: url('/assets/c6033181bc6481c1cfa042c13c1a7f84-centrano1-black_1-webfont.woff2') format('woff2'), url('/assets/c6033181bc6481c1cfa042c13c1a7f84-centrano1-black_1-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

#header {
    z-index: 99
}

.is-scrolled.header {
    background-color: #fff
}

.is-scrolled .fixed-logo {
    display: none
}

.is-scrolled .sticky-logo {
    display: block
}

.fixed-logo {
    display: none
}

@media (min-width: 768px) {
    .fixed-logo {
        display:block
    }
}

.sticky-logo {
    display: block;
    width: 63px;
    height: 63px
}

@media (min-width: 768px) {
    .sticky-logo {
        display:none;
        width: auto;
        height: auto
    }
}

.nav-box {
    position: relative
}

.nav-box .user-login {
    display: none
}

@media (min-width: 768px) {
    .nav-box .user-login {
        display:block
    }
}

.nav-box .user-login:hover svg path {
    stroke: #707070
}

.nav-box .user-login svg {
    width: 30px
}

.nav-opener {
    width: 28px;
    height: auto;
    padding: 15px 20px;
    transition: 0.3s;
    top: 4px;
    right: 0px;
    display: block;
    z-index: 99;
    position: relative
}

@media (min-width: 768px) {
    .nav-opener {
        width:42px;
        top: 13px
    }
}

.nav-opener:hover .icon-search {
    color: #172f30
}

.nav-opener:before,.nav-opener:after {
    background: #ff6c4d;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .nav-opener:before,.nav-opener:after {
        height:4px;
        width: 50px
    }
}

.nav-opener span {
    background: #ff6c4d;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .nav-opener span {
        height:4px;
        width: 50px
    }
}

.nav-opener:before,.nav-opener:after {
    content: '';
    top: 4px
}

@media (min-width: 768px) {
    .nav-opener:before,.nav-opener:after {
        top:-2px
    }
}

.nav-opener:after {
    top: 21px
}

@media (min-width: 768px) {
    .nav-opener:after {
        top:26px
    }
}

.nav-active .nav-opener span {
    opacity: 0
}

.nav-active .nav-opener:before,.nav-active .nav-opener:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.nav-active .nav-opener:after {
    transform: rotate(-45deg)
}

.filter-active .filter-opener {
    z-index: 0
}

.filter-opener {
    width: 78px;
    height: 59px;
    border-radius: 26px 0 0;
    background-color: #404040;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: fixed;
    right: 0;
    bottom: 10px;
    z-index: 8
}

@media (min-width: 768px) {
    .filter-opener {
        right:0;
        top: 50%;
        bottom: inherit
    }
}

.filter-opener span {
    color: #fff;
    font-size: 13px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

@media (min-width: 768px) {
    .filter-opener {
        display:none
    }
}

.filter-opener:hover .icon-search {
    color: #172f30
}

.nav-active .wrapp-site-menu {
    display: flex;
    animation-name: fadeIn;
    visibility: visible;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

.wrapp-site-menu {
    background-color: #ff6c4d;
    position: fixed;
    width: 100%;
    z-index: 999;
    transition: 0.3s;
    animation-delay: 0.5s;
    animation-name: fadeOut;
    visibility: hidden;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

.wrapp-site-menu .wrapp-content {
    overflow: auto;
    height: 100vh;
    min-height: 350px;
    padding: 30px 25px
}

.wrapp-site-menu .card-leng a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 17px;
    font-weight: 700;
    line-height: 21px;
    text-transform: uppercase;
    text-decoration: none
}

.wrapp-site-menu .card-logo .logo {
    width: 122px
}

.wrapp-site-menu .card-logo .logo img {
    width: 122px
}

.wrapp-site-menu .nav-opener:before,.wrapp-site-menu .nav-opener:after {
    background: #ffe9db
}

.wrapp-site-menu .social-list a:hover {
    opacity: 0.6
}

.wrapp-site-menu .nav {
    width: 100%;
    margin-bottom: 50px
}

.wrapp-site-menu .nav li {
    border-bottom: 1px solid #fff;
    width: 100%;
    margin: 0 auto
}

.wrapp-site-menu .nav li.hover .drop {
    display: block
}

.wrapp-site-menu .nav li a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 25px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 27px;
    padding: 30px 15px;
    text-decoration: none;
    display: block
}

@media (min-width: 768px) {
    .wrapp-site-menu .nav li a {
        font-size:45px;
        line-height: 50px
    }
}

.wrapp-site-menu .nav li .drop {
    display: none
}

.wrapp-site-menu .nav li .drop li {
    border-bottom: none
}

.wrapp-site-menu .nav li .drop a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 22px;
    font-weight: 300;
    line-height: 27px;
    text-decoration: none;
    padding: 0px 11px 10px;
    display: block
}

@media (min-width: 768px) {
    .wrapp-site-menu .nav li .drop a {
        font-size:22px;
        line-height: 28px
    }
}

.wrapp-site-menu .card-links {
    position: relative;
    top: 50px
}

.wrapp-site-menu .btn {
    padding: 14px 56px
}

@media (min-width: 768px) {
    .wrapp-site-menu .btn {
        padding:11px 42px
    }
}

.is-scrolled.header-booking_index .nav-opener:before,.is-scrolled.header-booking_index .nav-opener:after {
    background: #ff6c4d
}

.is-scrolled.header-booking_index .nav-opener span {
    background: #ff6c4d
}

.is-scrolled.header-booking_index .num1 {
    display: none
}

@media (min-width: 768px) {
    .is-scrolled.header-booking_index .num1 {
        display:none
    }
}

.is-scrolled.header-booking_index .num2 {
    display: none
}

@media (min-width: 768px) {
    .is-scrolled.header-booking_index .num2 {
        display:block
    }
}

.header-booking_index .num1 {
    display: none
}

@media (min-width: 768px) {
    .header-booking_index .num1 {
        display:block
    }
}

.header-booking_index .num2 {
    display: none
}

@media (min-width: 768px) {
    .header-booking_index .num2 {
        display:none
    }
}

.header-booking_index .nav-opener {
    width: 28px;
    height: auto;
    padding: 15px 20px;
    transition: 0.3s;
    top: 4px;
    right: 0px;
    display: block;
    z-index: 99;
    position: relative
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener {
        width:42px;
        top: 13px
    }
}

.header-booking_index .nav-opener:hover .icon-search {
    color: #172f30
}

.header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
    background: #fff;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
        height:4px;
        width: 50px
    }
}

.header-booking_index .nav-opener span {
    background: #fff;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener span {
        height:4px;
        width: 50px
    }
}

.header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
    content: '';
    top: 4px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
        top:-2px
    }
}

.header-booking_index .nav-opener:after {
    top: 21px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:after {
        top:26px
    }
}

.nav-active .header-booking_index .nav-opener span {
    opacity: 0
}

.nav-active .header-booking_index .nav-opener:before,.nav-active .header-booking_index .nav-opener:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.nav-active .header-booking_index .nav-opener:after {
    transform: rotate(-45deg)
}

.header-booking_index .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media (min-width: 768px) {
    .header-booking_index .navbar-brand img {
        width:auto;
        height: auto
    }
}

.header-achat-steps {
    box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
}

.header-achat-steps .navbar {
    padding: 0.7rem 1rem
}

.header-achat-steps .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .header-achat-steps .navbar-brand img {
        width: auto
    }
}

@media (max-width: 768px) {
    .header-achat-steps .navbar-brand img {
        width:30px;
        height: auto
    }
}

.header-achat-confirmation .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .header-achat-confirmation .navbar-brand img {
        width: auto
    }
}

@media (min-width: 768px) {
    .header-achat-confirmation .navbar-brand img {
        width:auto;
        height: auto
    }
}

.footer {
    background-color: #333
}

.list-nav-footer a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding-top: 5px;
    display: inline-block;
    padding-bottom: 5px
}

.logo-footer {
    width: 116px
}

@media (min-width: 768px) {
    .logo-footer {
        width:auto
    }
}

.logo-footer img {
    width: 116px
}

@media (min-width: 768px) {
    .logo-footer img {
        width:auto
    }
}

.social-list a:hover {
    opacity: 0.6
}

.footer-form .btn-input {
    padding: 11px;
    font-size: 15PX
}

.footer-form label {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 700;
    line-height: 27px
}

.footer-form .input-control {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 50px 0 0 50px;
    background-color: #fff;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    border: 2px solid transparent;
    padding: 8px 27px
}

.footer-form .input-control::placeholder {
    opacity: 0.5;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.copy p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 24px
}

.copy p a {
    color: #707070;
    text-decoration: none
}

.bg-stretch {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.scroll-locked,.page-scroll-locked {
    overflow: hidden;
    position: fixed;
    left: 0;
    right: 0;
    width: 100%
}

.fadeIn {
    visibility: hidden
}

.fadeIn.time0-1 {
    animation-delay: 0.5s
}

.fadeIn.time0-22 {
    animation-delay: 0.9s
}

.fadeIn.time0-2 {
    animation-delay: 0.7s
}

.fadeIn.time0-33 {
    animation-delay: 1.3s
}

.fadeIn.time0-3 {
    animation-delay: 0.9s
}

.fadeIn.time0-44 {
    animation-delay: 1.7s
}

.fadeIn.time0-4 {
    animation-delay: 1.2s
}

.fadeIn.time0-55 {
    animation-delay: 2.1s
}

.fadeIn.time0-5 {
    animation-delay: 1.4s
}

.fadeIn.in-viewport,.in-viewport .fadeIn {
    animation-name: fadeIn;
    visibility: visible;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

@keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

.in-viewport .animate-right {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.in-viewport .animate-left {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.in-viewport .animate-top {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.animate-right {
    transform: translate(50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.animate-left {
    transform: translate(-50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.animate-top {
    transform: translate(0, 50%) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.text-gray {
    color: #707070
}

.text-blue {
    color: #90dade
}

.text-orange {
    color: #ff6c4d
}

.text-pink {
    color: #ffad9f
}

.text-dark-gray {
    color: #404040
}

.bg-blue-light {
    background-color: #90dade
}

.btn-warning {
    background-color: #ff6c4d
}

.bg-warning {
    background-color: #ff6c4d !important
}

.bg-dark-warning {
    background-color: #e46a44
}

.bg-dark-blue {
    background-color: #3975fc
}

.text-dark-blue {
    color: #3975fc
}

.section-images .card-img img {
    width: 100%
}

#wrapper {
    position: relative
}

.back-to-top {
    opacity: 0;
    position: absolute;
    right: 0;
    bottom: 0px
}

.skip-content {
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0px
}

.card-statick-img {
    width: auto;
    position: absolute;
    bottom: 0;
    top: 0%;
    left: 50%;
    transform: translateX(-50%)
}

@media (max-height: 680px),screen and (orientation:portrait) {
    .card-statick-img {
        top:45px
    }
}

@media (min-width: 700px) {
    .card-statick-img {
        top:17%;
        left: 0%;
        transform: translateX(0);
        width: 654px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .card-statick-img {
        left:50%;
        width: inherit;
        transform: translateX(-50%)
    }
}

@media (min-width: 1330px) {
    .card-statick-img {
        top:0
    }
}

@media (min-width: 1430px) {
    .card-statick-img {
        left:5%
    }
}

@media (min-width: 1550px) {
    .card-statick-img {
        left:10%
    }
}

.card-statick-img img {
    max-height: 375px;
    height: 100%;
    width: auto
}

@media (min-width: 375px) {
    .card-statick-img img {
        max-height:440px
    }
}

@media (min-width: 1024px) {
    .card-statick-img img {
        max-height:600px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .card-statick-img img {
        max-height:375px
    }
}

@media (min-width: 1330px) {
    .card-statick-img img {
        max-height:847px
    }
}

.wheel-slideshow {
    position: relative
}

.wheel-slideshow:after {
    content: '';
    background-image: url('/assets/images/slide-bg-bottom-mobile.png');
    display: block;
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100% 60%;
    z-index: 1
}

@media (min-height: 813px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:203% 60%
    }
}

@media (min-height: 768px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:180% 45%
    }
}

@media (min-height: 568px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:100% 50%
    }
}

@media (min-width: 700px) {
    .wheel-slideshow:after {
        background-image:url('";
        // line 12469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/slide-bg-bottom.png"), "html", null, true);
        echo "');
        background-size: 203% 44%
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .wheel-slideshow:after {
        background-size:100% 28%
    }
}

.wheel-slideshow .bounce {
    animation: bounce 2s;
    transform: translateY(0px);
    animation-iteration-count: infinite
}

@keyframes bounce {
    0% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }

    50% {
        top: 140px;
        height: 140px;
        -webkit-animation-timing-function: ease-out
    }

    55% {
        top: 160px;
        height: 120px;
        -webkit-animation-timing-function: ease-in
    }

    65% {
        top: 120px;
        height: 140px;
        -webkit-animation-timing-function: ease-out
    }

    95% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }

    100% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }
}

.slideset .slide:first-child .slide-text-gallery .btn {
    display: block
}

.slideset .slide:first-child .list-nav-slide {
    display: none
}

.slideset .slide:first-child h1,.slideset .slide:first-child h2 {
    display: inline-block;
    position: relative;
    font-family: 'Centra No1';
    font-weight: 900;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .slideset .slide:first-child h1,.slideset .slide:first-child h2 {
        font-size:45px
    }
}

.slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
    content: '';
    background-image: url('/assets/images/layer-smile-white.png');
    display: inline-block;
    width: 36px;
    height: 14px;
    background-size: 36px;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 10px;
    right: -30px
}

@media (min-width: 700px) {
    .slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
        background-image:url('/assets/images/smile-min-gray.png');
        width: 90px;
        height: 35px;
        background-size: 90px;
        right: -120px
    }
}

@media (min-width: 1330px) {
    .slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
        background-image:url('/assets/images/smile-min-gray.png');
        width: 127px;
        height: 50px;
        background-size: 127px;
        right: -120px
    }
}

.slideset .slide h1,.slideset .slide h2 {
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .slideset .slide h1,.slideset .slide h2 {
        font-size:45px
    }
}

.slideset .slide .btn {
    padding: 11px 34px;
    margin: auto
}

@media (min-width: 700px) {
    .slideset .slide .btn {
        padding:11px 42px;
        margin: 0
    }
}

.slideset .slide .slide-img-gallery {
    width: auto;
    position: absolute;
    bottom: 0;
    top: 0%;
    left: 50%;
    transform: translateX(-50%)
}

@media (max-height: 680px),screen and (orientation:portrait) {
    .slideset .slide .slide-img-gallery {
        top:45px
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-img-gallery {
        top:17%;
        left: 0%;
        transform: translateX(0);
        width: 654px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-img-gallery {
        left:50%;
        width: auto;
        transform: translateX(-50%)
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-img-gallery {
        top:0
    }
}

@media (min-width: 1430px) {
    .slideset .slide .slide-img-gallery {
        left:5%
    }
}

@media (min-width: 1550px) {
    .slideset .slide .slide-img-gallery {
        left:10%
    }
}

.slideset .slide .slide-img-gallery img {
    max-height: 375px;
    height: 100%;
    width: auto
}

@media (min-width: 375px) {
    .slideset .slide .slide-img-gallery img {
        max-height:440px
    }
}

@media (min-width: 1024px) {
    .slideset .slide .slide-img-gallery img {
        max-height:600px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-img-gallery img {
        max-height:375px
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-img-gallery img {
        max-height:847px
    }
}

.slideset .slide .slide-text-gallery {
    position: absolute;
    left: 50%;
    top: 80%;
    transform: translate(-50%, -50%);
    width: 58vw;
    padding: 0 15px 0 0;
    display: flex !important
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-text-gallery {
        display:none !important
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery {
        left:75%;
        top: 40%
    }
}

@media (min-width: 750px) {
    .slideset .slide .slide-text-gallery {
        left:75%;
        width: 68vw
    }
}

@media (min-width: 855px) {
    .slideset .slide .slide-text-gallery {
        width:78vw;
        left: 78%
    }
}

@media (min-width: 1024px) {
    .slideset .slide .slide-text-gallery {
        width:700px
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-text-gallery {
        top:40%;
        width: 583px;
        left: 72%
    }
}

@media (min-width: 1700px) {
    .slideset .slide .slide-text-gallery {
        left:67%
    }
}

.slideset .slide .slide-text-gallery .btn {
    display: none
}

.slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
    color: #fff;
    position: relative;
    left: 22px
}

@media (max-width: 701px) {
    .slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
        font-size:30px
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
        color:#707070;
        left: 0;
        font-size: 70px
    }
}

.slideset .slide .slide-text-gallery h1 span,.slideset .slide .slide-text-gallery h2 span {
    color: #3975fc
}

.slideset .slide .slide-text-gallery p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1';
    height: 51px;
    overflow: hidden;
    width: 100%;
    position: relative;
    left: 22px;
    padding-right: 20px
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery p {
        height:auto;
        position: static
    }
}

.list-nav-slide {
    position: absolute;
    left: -5%;
    top: 10%;
    transform: translate(-50%)
}

@media (min-width: 700px) {
    .list-nav-slide {
        left:-10%;
        top: 23%
    }
}

@media (min-width: 1330px) {
    .list-nav-slide {
        top:50%
    }
}

.list-nav-slide li {
    margin-bottom: 50px;
    width: 10px;
    height: 10px;
    border: 1px solid #fff;
    background-color: transparent;
    border-radius: 50%;
    position: relative
}

@media (min-width: 700px) {
    .list-nav-slide li {
        border:1px solid #707070;
        background-color: #fff
    }
}

.list-nav-slide li:nth-child(4n) {
    margin-bottom: 0px
}

.list-nav-slide li:nth-child(4n):after {
    content: none
}

.list-nav-slide li:after {
    content: '';
    width: 1px;
    height: 50px;
    background-color: #fff;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 100%
}

@media (min-width: 700px) {
    .list-nav-slide li:after {
        background-color:#707070
    }
}

.list-nav-slide li.active {
    background-color: #fff
}

@media (min-width: 700px) {
    .list-nav-slide li.active {
        background-color:#707070
    }
}

.list-nav-slide li span {
    display: none
}

.list-nav-slide li:first-child {
    display: none
}

.section-top-option .container {
    padding: 0
}

@media (min-width: 700px) {
    .section-top-option .container {
        padding:0 15px
    }
}

.section-top-option .row {
    padding: 0
}

@media (min-width: 768px) {
    .section-top-option .row:nth-child(even) {
        flex-direction:row-reverse !important
    }
}

.section-top-option .row:nth-child(even) .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
}

.section-top-option .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 700px) {
}

.section-top-option .card-title {
    margin-bottom: 29px
}

.section-top-option .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-top-option .card-title h2 {
        font-size:45px;
        line-height: 1em
    }
}

.section-top-option .card-title h2 span {
    color: #ff6c4d
}

.section-top-option p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-top-option p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-top-option a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-top-option a {
        font-size:20px;
        line-height: 45px
    }
}

.section-top-option .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-top-option .card-img img {
        max-width:100%
    }
}

.js-tab-hidden {
    display: block !important;
    left: -9999px !important;
    position: absolute !important;
    top: -9999px !important
}

.section-logistic {
    background-color: #ffad9f
}

.section-logistic .in-viewport .card-title .h1:after {
    content: '';
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.section-logistic .card-title {
    margin: 0 auto
}

@media (min-width: 768px) {
    .section-logistic .card-title {
        width:auto
    }
}

.section-logistic .card-title .h1 {
    font-weight: 900;
    line-height: 39px;
    color: #fff;
    position: relative;
    z-index: 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-logistic .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-logistic .card-title .h1 span {
    color: #ff6c4d;
    z-index: 2
}

.section-logistic .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/hart-trans.png');
    display: block;
    width: 60px;
    height: 75px;
    background-size: 60px;
    background-repeat: no-repeat;
    position: absolute;
    right: 8px;
    top: -29px;
    z-index: -1;
    transform: translate(50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

@media (min-width: 768px) {
    .section-logistic .card-title .h1:after {
        width:150px;
        height: 161px;
        background-size: 111px;
        right: -77px;
        top: -21px
    }
}

.wrapp-logistic {
    padding: 6vh 0
}

@media (min-width: 768px) {
    .wrapp-logistic {
        padding:45px 0
    }
}

.wrapp-logistic .viewport-section.in-viewport {
    background: #0f0
}

.section-logistic.delivery .logistic-tabset {
    justify-content: space-around;
    max-width: 900px;
    margin: 0 auto
}

.section-logistic.delivery .logistic-tabset li {
    width: 50%
}

.section-logistic.delivery .tab-content {
    justify-content: space-around;
    max-width: 900px;
    margin: 0 auto
}

@media (min-width: 768px) {
    .section-logistic.delivery .tab-content .item-tab {
        width:50%
    }
}

.section-logistic .logistic-tabset {
    display: flex;
    margin-bottom: 0;
    padding: 0
}

.section-logistic .logistic-tabset li {
    width: 33.33%;
    margin: 0 5px
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li {
        margin:0 15px
    }
}

.section-logistic .logistic-tabset li a {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    opacity: 0.5
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li a {
        opacity:1;
        cursor: inherit
    }
}

.section-logistic .logistic-tabset li a .card-title {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 700;
    line-height: 27px;
    margin: 0
}

@media (max-width: 767px) {
    .section-logistic .logistic-tabset li a.active {
        opacity:1
    }

    .section-logistic .logistic-tabset li a.active p {
        border-bottom: 5px solid #fff
    }
}

.section-logistic .logistic-tabset li p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li p {
        font-size:18px;
        font-weight: bold;
        line-height: 28px
    }
}

.section-logistic .logistic-tabset li .card-icon {
    width: 53px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 35px
}

@media (min-width: 480px) {
    .section-logistic .logistic-tabset li .card-icon {
        width:97px;
        height: 112px
    }
}

.section-logistic .logistic-tabset li .card-icon img {
    width: 100%
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-logistic .logistic-tabset li .card-icon img {
        width: auto
    }
}

.section-logistic .tab-content {
    display: flex;
    margin-bottom: 0
}

.section-logistic .tab-content .item-tab {
    width: 100%;
    margin: 0 15px
}

@media (min-width: 768px) {
    .section-logistic .tab-content .item-tab {
        width:33.33%
    }
}

.section-logistic .tab-content p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-logistic .js-tab-hidden {
    display: block !important;
    left: -9999px !important;
    position: absolute !important;
    top: -9999px !important
}

@media (min-width: 768px) {
    .section-logistic .js-tab-hidden {
        position:static !important
    }
}

.popup-holder .popup {
    display: none;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    z-index: 100;
    width: 100%;
    height: 100%;
    overflow: auto;
    overflow-x: hidden;
    align-items: center;
    justify-content: center;
    background-color: rgba(87, 87, 87, 0.8)
}

.popup-holder .popup.popup-locked-active {
    display: block
}

.popup-holder .wrapp-popup-all {
    margin: 25px 0
}

.popup-holder .jcf-scrollable-wrapper {
    width: auto !important
}

.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-dec,.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-inc {
    background: #3975fc;
    height: 3px;
    width: 3px;
    left: 0;
    top: 0
}

.popup-holder .jcf-scrollbar-slider {
    width: 3px
}

.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-handle {
    background: #3975fc;
    width: 3px
}

.popup-holder .jcf-scrollbar-vertical {
    width: 3px
}

.popup-holder .wrapp-popup {
    max-width: 600px !important;
    width: 100% !important;
    background-color: #3975fc;
    padding: 45px 37px 35px;
    margin: 0 auto;
    position: relative
}

@media (min-width: 768px) {
    .popup-holder .wrapp-popup {
        padding:124px 60px 83px
    }
}

.popup-holder .card-header {
    padding: 0;
    margin-bottom: 0;
    background-color: transparent;
    border-bottom: 0px solid transparent
}

.popup-holder .card-icon {
    margin-bottom: 33px
}

.popup-holder .close {
    opacity: 1;
    position: absolute;
    right: 33px;
    top: 33px;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.popup-holder .close span {
    top: 12px;
    left: 1px;
    right: 6px;
    height: 4px;
    width: 35px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    position: relative
}

.popup-holder .close span:after {
    top: 15px;
    left: -6px;
    right: 6px;
    height: 4px;
    width: 45px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    display: block;
    -webkit-transform: rotate(50deg);
    transform: rotate(47deg)
}

.popup-holder .close span:before {
    top: 15px;
    left: -5px;
    right: 6px;
    height: 4px;
    width: 45px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    display: block;
    -webkit-transform: rotate(-50deg);
    transform: rotate(-46deg)
}

.popup-holder .close span:before,.popup-holder .close span:after {
    content: '';
    position: absolute
}

.nav-active .popup-holder .close span span {
    opacity: 0
}

.nav-active .popup-holder .close span:before,.nav-active .popup-holder .close span:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.popup-holder .title h2 {
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 400;
    line-height: 49px;
    color: #fff;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 768px) {
    .popup-holder .title h2 {
        font-size:48px
    }
}

.popup-holder .title h2 span {
    color: #ffad9f
}

@media (min-width: 768px) {
    .popup-holder .title h2 span {
        color:#ffe9db
    }
}

.popup-holder .title p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .popup-holder .title p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.popup-holder form.success-sending .succes {
    display: block
}

.popup-holder form .form-control-wrapp {
    margin-bottom: 15px
}

.popup-holder form .form-control {
    background-color: transparent;
    border: none;
    border-bottom: 3px solid #fff;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    line-height: 18px;
    border-radius: 0;
    padding: 0.375rem 0.75rem 0.375rem 0
}

.popup-holder form .form-control.input-error {
    border-bottom: 3px solid #e92525
}

@media (min-width: 768px) {
    .popup-holder form .form-control {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.popup-holder form .form-control::placeholder {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    line-height: 18px
}

@media (min-width: 768px) {
    .popup-holder form .form-control::placeholder {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.popup-holder form .succes {
    display: none;
    text-align: center;
    padding-top: 20px
}

.popup-holder form .succes p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .popup-holder form .succes p {
        font-size:23px;
        line-height: 28px;
        margin-left: 20px
    }
}

.popup-holder form .wrapp-btn .btn-transparent {
    min-width: 208px
}

.popup-holder form .form-control-checkbox {
    margin-top: 40px;
    margin-bottom: 33px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox {
        margin-top:148px
    }
}

.popup-holder form .form-control-checkbox label {
    display: flex;
    align-items: flex-start;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox label {
        font-size:18px;
        line-height: 28px;
        margin-left: 20px
    }
}

.popup-holder form .form-control-checkbox .custom-control-label::before,.popup-holder form .form-control-checkbox .custom-control-label::after {
    height: 21px;
    width: 21px;
    left: -40px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox .custom-control-label::before,.popup-holder form .form-control-checkbox .custom-control-label::after {
        height:32px;
        width: 32px;
        left: -40px
    }
}

.popup-holder form .form-control-checkbox .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #fff;
    background-color: #007bff
}

.custom-text .wrapp-case-clients .card-title strong {
    color: #3975fc
}

.custom-text .wrapp-case-clients .card-title p {
    color: #ffad9f
}

.custom-text .wrapp-case-clients .wrapp-case-tabset .card-title {
    margin: 30px 0
}

.custom-text .wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
    color: #707070
}

.custom-text .wrapp-case-discover {
    position: relative
}

.custom-text .wrapp-case-discover .wrapp-case-tabset:before {
    content: none;
    background-image: linear-gradient(to right, #fff 0%, rgba(235, 235, 235, 0) 100%, rgba(255, 255, 255, 0) 100%);
    width: 515px;
    height: 589px;
    display: block;
    position: absolute;
    top: 50px;
    z-index: 22
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        content:''
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-220px
    }
}

@media (min-width: 1200px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-170px
    }
}

@media (min-width: 1500px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-80px
    }
}

.custom-text .wrapp-case-discover .wrapp-case-tabset:after {
    content: none;
    background-image: linear-gradient(270deg, #fff 0%, rgba(235, 235, 235, 0) 100%, rgba(255, 255, 255, 0) 100%);
    width: 515px;
    height: 589px;
    display: block;
    position: absolute;
    top: 50px;
    z-index: 25
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        content:''
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-220px
    }
}

@media (min-width: 1200px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-170px
    }
}

@media (min-width: 1500px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-80px
    }
}

.custom-text .wrapp-case-discover .wrapp-case-tabset .card-title {
    margin: 0px 0 65px
}

.custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
    color: #ff6c4d;
    font-size: 38px
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
        font-size:45px
    }
}

.custom-text .wrapp-case-discover .box-info:after {
    content: '';
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #000;
    opacity: 0.6;
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0
}

.custom-text .wrapp-case-discover .text-holder {
    z-index: 99;
    left: 22px !important;
    bottom: -20px !important
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .text-holder {
        padding-right: 15px;
        left: 14px !important;
        width: 100%
    }
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .text-holder {
        left:30px !important;
        bottom: 30px !important
    }
}

.custom-text .wrapp-case-discover .text-holder ul p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 0.7px;
    line-height: 33px
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .text-holder ul p {
        font-size:25px;
        line-height: 33px
    }
}

.custom-text .wrapp-case-discover .case-center {
    margin-bottom: 10px;
    width: 100%
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center {
        margin-bottom:124px
    }
}

.custom-text .wrapp-case-discover .case-center img {
    width: 109px;
    margin-bottom: 15px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .case-center img {
        width: auto;
        zoom:0.4}
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center img {
        width:220px;
        margin-bottom: 15px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .case-center img {
        width:auto
    }
}

.custom-text .wrapp-case-discover .case-center span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 700;
    line-height: 26px;
    max-width: 390px;
    display: block;
    width: 100%
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center span {
        font-size:22px;
        line-height: 36px
    }
}

.custom-text .case-tabset {
    display: none !important
}

.section-discover-cases {
    padding: 50px 0 50px
}

@media (min-width: 768px) {
    .section-discover-cases {
        padding:120px 0 100px
    }
}

.wrapp-case-clients {
    padding: 130px 0 124px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-case-clients {
        padding:59px 0 124px
    }
}

.wrapp-case-clients .card-title.first-top {
    position: absolute;
    left: 0;
    top: -34px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title.first-top {
        position:static
    }
}

.wrapp-case-clients .card-title strong {
    display: block;
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title strong {
        font-size:95px
    }
}

.wrapp-case-clients .card-title p {
    color: #ffe9db;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title p {
        font-size:100px;
        top: -44px
    }
}

.wrapp-case-clients .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 220px
    }
}

.wrapp-case-clients .wrapp-case-tabset {
    margin-top: -88px
}

.wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
        font-size:45px;
        line-height: 85px
    }
}

.wrapp-case-clients .case-tabset {
    padding: 0 0 80px
}

.wrapp-case-clients .case-tabset li a {
    opacity: 0.5;
    min-width: 137px;
    width: 100%;
    padding: 9px 6px 11px
}

@media (min-width: 768px) {
    .wrapp-case-clients .case-tabset li a {
        min-width:205px
    }
}

.wrapp-case-clients .case-tabset li a.active {
    opacity: 1
}

.section-trust .container {
    padding: 0
}

@media (min-width: 768px) {
    .section-trust .container {
        padding:0 15px
    }
}

.section-trust.no-slide {
    padding: 89px 0 0px
}

.wrapp-slide-trust {
    max-width: 1080px;
    background-image: url('/assets/images/bg-slide-trust.png');
    background-repeat: no-repeat;
    width: 100%;
    padding: 205px 0 100px;
    overflow: hidden;
    background-position: center 88px
}

@media (max-width: 480px) {
    .wrapp-slide-trust {
        padding:117px 0;
        background-position: center -34px
    }
}

.wrapp-trust {
    padding: 89px 0 0px
}

.wrapp-trust .card-title {
    padding: 10px 15px
}

.wrapp-trust .card-title.no-after .h1:after {
    content: none
}

.wrapp-trust .card-title .h1 {
    color: #ff6c4d;
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-trust .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.wrapp-trust .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-orange.png');
    width: 102px;
    height: 42px;
    display: block;
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%)
}

.wrapp-trust .card-title .h1 span {
    color: #707070
}

.wrapp-trust .card-sub-title {
    position: relative;
    top: 69px
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title {
        position:static
    }
}

.wrapp-trust .card-sub-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title p {
        font-size:115px
    }
}

.wrapp-trust .card-sub-title strong {
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 11px;
    transform: rotate(-3deg)
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title strong {
        font-size:80px;
        margin-top: -54px;
        left: 28px
    }
}

.card-title-sub {
    padding: 10px 15px
}

.card-title-sub.no-after .h1:after {
    content: none
}

.card-title-sub .h1 {
    color: #ff6c4d;
    font-size: 30px;
    font-weight: 900;
    line-height: 39px;
    position: relative
}

@media (min-width: 768px) {
    .card-title-sub .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.card-title-sub .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-orange.png');
    width: 102px;
    height: 42px;
    display: block;
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%)
}

.card-title-sub .h1 span {
    color: #707070
}

.widget-trust img {
    width: 100%
}

.wrapp-intro-contact {
    width: 100%;
    height: 400px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -100px;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1;
    background-size: cover
}

@media (min-width: 768px) {
    .wrapp-intro-contact {
        height:35vh;
        background-position: bottom
    }
}

.wrapp-intro-contact .card-title {
    margin-top: 100px
}

.wrapp-intro-contact .card-title .h1 {
    position: relative;
    font-size: 60px
}

@media (min-width: 768px) {
    .wrapp-intro-contact .card-title .h1 {
        font-size:45px;
        line-height: 53px
    }
}

.wrapp-intro-contact .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-blue.png');
    width: 36px;
    height: 14px;
    background-size: 36px;
    background-repeat: no-repeat;
    display: block;
    position: absolute;
    bottom: -16px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-contact .card-title .h1:after {
        width:108px;
        height: 42px;
        background-size: 108px;
        bottom: -50px
    }
}

.section-intro.height-custom {
    height: 250px
}

@media (min-width: 500px) {
    .section-intro.height-custom {
        height:350px
    }
}

.section-contact-form .card-text a {
    color: #707070;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-contact-form .card-text a {
        font-size:45px;
        line-height: 1.2
    }
}

.section-contact-form .card-text a:hover {
    color: #ff6c4d
}

.section-contact-form .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .section-contact-form .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 21px
    }
}

.form-contact-page label {
    font-family: 'Centra No1';
    color: #707070
}

.form-contact-page.success-sending .succes {
    display: block
}

.form-contact-page .wrapp-input-control {
    margin-bottom: 25px
}

.form-contact-page .input-control {
    display: block;
    width: 100%;
    padding: 0.625rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #8898aa;
    background-color: #f5f5f5;
    background-clip: padding-box;
    border: none;
    border-radius: 20px;
    -webkit-box-shadow: none;
    box-shadow: none;
    transition: 0.3
}

.form-contact-page .input-control.input-error {
    border-bottom: 3px solid #e92525
}

@media (min-width: 768px) {
    .form-contact-page .input-control {
        font-size:18px;
        line-height: 22px
    }
}

.form-contact-page .input-control:focus {
    background: white;
    border: 1px solid #dcdcdc
}

.form-contact-page .succes {
    display: none;
    text-align: center;
    padding-top: 20px
}

.form-contact-page .succes p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .form-contact-page .succes p {
        font-size:23px;
        line-height: 28px;
        margin-left: 20px
    }
}

.section-contact {
    background-color: #e5e5e5;
    padding: 80px 0
}

@media (min-width: 768px) {
    .section-contact {
        padding:45px 0
    }
}

.section-contact .card-title .h1 {
    color: white;
    display: flex;
    position: relative;
    text-align: left;
    max-width: 150px;
    margin: 0 auto 0 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-contact .card-title .h1 {
        max-width:500px;
        margin: 0;
        font-size: 45px
    }
}

@media (min-width: 880px) {
    .section-contact .card-title .h1 {
        max-width:100%;
        margin: 0;
        font-size: 45px;
        letter-spacing: 2px
    }
}

.section-contact .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-white.png');
    width: 36px;
    height: 14px;
    display: inline-block;
    margin-left: 66px;
    background-size: 36px;
    position: absolute;
    right: -65px;
    bottom: 15px
}

@media (min-width: 768px) {
    .section-contact .card-title .h1:after {
        width:127px;
        height: 50px;
        background-size: 127px
    }
}

@media (min-width: 880px) {
    .section-contact .card-title .h1:after {
        position:static
    }
}

.wrapp-list-contact-items .left-items li,.wrapp-list-contact-items .right-items li {
    margin-bottom: 12px
}

.wrapp-list-contact-items .left-items .line-top,.wrapp-list-contact-items .right-items .line-top {
    margin-bottom: 10px
}

.wrapp-list-contact-items .left-items .line-top strong,.wrapp-list-contact-items .right-items .line-top strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 28px;
    line-height: 30px
}

@media (min-width: 768px) {
    .wrapp-list-contact-items .left-items .line-top strong,.wrapp-list-contact-items .right-items .line-top strong {
        font-size:20px;
        line-height: 27px
    }
}

.wrapp-list-contact-items .left-items .line-top strong:before,.wrapp-list-contact-items .right-items .line-top strong:before {
    content: '';
    background-image: url('/assets/images/map-orange.svg');
    background-repeat: no-repeat;
    width: 12px;
    height: 18px;
    display: inline-block;
    margin-right: 3px
}

.wrapp-list-contact-items .left-items .text-botton p,.wrapp-list-contact-items .right-items .text-botton p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-list-contact-items .left-items .text-botton p,.wrapp-list-contact-items .right-items .text-botton p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.container .h5 {
    font-weight: 900;
    font-size: 27px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .container .h5 {
        line-height:85px;
        font-size: 45px
    }
}

.container .h5:after {
    content: '';
    background-image: url('/assets/images/shape-grey.png');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -0.5px
}

.section-smile-club {
    padding: 70px 0
}

.section-smile-club .smile-icon {
    position: absolute;
    top: -150px;
    right: 10px
}

@media (min-width: 768px) {
    .section-smile-club .smile-icon {
        right:128px;
        top: -151px
    }
}

.section-smile-club .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-smile-club .smile-icon svg {
        width:122px
    }
}

.section-smile-club.section-smile-club-inner {
    padding: 70px 0
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner {
        padding:120px 0
    }
}

.section-smile-club.section-smile-club-inner .smile-icon {
    position: absolute;
    top: -130px;
    right: 10px
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner .smile-icon {
        right:128px
    }
}

.section-smile-club.section-smile-club-inner .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner .smile-icon svg {
        width:122px
    }
}

.section-smile-club.section-smile-club-inner .card-title {
    margin: 0 25px 25px
}

.section-smile-club.section-smile-club-inner .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg')
}

.section-smile-club.section-smile-club-inner .card-title .h1 span {
    color: #3975fc
}

.section-smile-club .card-title {
    margin-bottom: 25px
}

.section-smile-club .card-title .h1 {
    font-weight: 900;
    font-size: 30px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-smile-club .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-smile-club .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -17px
}

.section-smile-club .card-title .h1 span {
    color: #ff6c4d
}

.section-smile-club .card-img img {
    width: 100%
}

.section-smile-club .container .link-insta:after {
    content: '';
    background-image: url('/assets/images/shape-light-blue.png');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 55%;
    transform: translateX(-50%);
    bottom: 55px
}

.wrapp-intro-particulier {
    position: relative;
    min-height: 592px;
    background-image: url(/assets/images/intro-particuliers.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-particulier {
        height:85vh;
    }
}

.wrapp-intro-particulier:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-particulier:before {
        height:350px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier:before {
        height:350px
    }
}

.wrapp-intro-particulier .wrapp-btn {
    position: absolute;
    top: 158px;
    left: 50%;
    width: 100%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .wrapp-btn {
        top:240px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .wrapp-btn {
        top:310px
    }
}

.wrapp-intro-particulier .container {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container {
        top:110px
    }
}

.wrapp-intro-particulier .container .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container .card-title {
        margin-top:40px;
        max-width: 1120px
    }
}

.wrapp-intro-particulier .container .card-title .h1 {
    font-size: 24px
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .container .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container .card-title .h1 {
        font-size:45px;
        line-height: 55px
    }
}

.wrapp-intro-particulier .embedresize {
    position: relative;
    bottom: -58vh;
    max-width: 73vw;
    margin: auto
}

.wrapp-intro-particulier .embedresize iframe {
    height: 434PX
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .embedresize {
        bottom:-54vh;
        max-width: 600px
    }
}

@media (max-width: 768px) {
    .wrapp-intro-particulier .embedresize {
        bottom:-377px;
        max-width: 100%
    }
}

@media (min-width: 768px) {
    .embedresize {
        max-width:638px;
        overflow: hidden
    }
}

.embedresize {
    position: relative;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.embedresize:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border-radius: 5px;
    opacity: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.embedresize:hover {
    transform: scale(1.1)
}

.embedresize:hover:after {
    opacity: 1
}

.section-intro-slidset .card-title {
    position: relative;
    margin-top: -50px
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title {
        margin-top:-137px
    }
}

.section-intro-slidset .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title p {
        font-size:235px
    }
}

.section-intro-slidset .card-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg)
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong.first {
        margin-top:-86px
    }
}

.section-intro-slidset .card-title strong p {
    display: inline-block;
    position: absolute;
    right: -15px;
    bottom: -25px
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong p {
        right:-52px;
        bottom: -61px
    }
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong {
        font-size:128px;
        margin-top: -54px;
        left: 6px
    }
}

.section-intro-slidset .card-descrip p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1'
}

.section-pro-slidset .card-title {
    position: relative
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title {
        margin-top:-137px
    }
}

.section-pro-slidset .card-title p {
    color: #90dade;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title p {
        font-size:175px
    }
}

.section-pro-slidset .card-title strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg)
}

.section-pro-slidset .card-title strong.first {
    margin-top: -86px
}

.section-pro-slidset .card-title strong p {
    display: inline-block;
    position: absolute;
    right: -15px;
    bottom: -25px
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title strong p {
        right:-52px;
        bottom: -61px
    }
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title strong {
        font-size:91px;
        margin-top: -37px;
        left: 6px
    }
}

.section-pro-slidset .card-descrip p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1'
}

.section-opportunities {
    position: relative;
    padding: 60px 0
}

.section-opportunities p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 31px
}

@media (min-width: 768px) {
    .section-opportunities {
        padding:70px 0
    }
}

.section-opportunities .card-img-slids {
    position: absolute;
    top: -35px
}

@media (min-width: 768px) {
    .section-opportunities .card-img-slids {
        top:-60px
    }
}

.section-opportunities .card-img-slids img {
    width: 70px;
    height: 70px
}

@media (min-width: 768px) {
    .section-opportunities .card-img-slids img {
        width:140px;
        height: 140px
    }
}

.section-opportunities .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-opportunities .card-title .h1 {
        font-size:45px;
        line-height: 42px;
        margin-top: 24px
    }
}

.section-opportunities .card-title .h1 span {
    color: #ff6c4d
}

.section-opportunities .video-holder {
    position: relative;
    width: 90%;
    height: 0;
    padding: 25%;
    overflow: hidden
}

@media (min-width: 900px) {
    .section-opportunities .video-holder {
        width:66%;
        padding: 19%
    }
}

.section-opportunities .video-holder iframe,.section-opportunities .video-holder video,.section-opportunities .video-holder .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%
}

.section-opportunities .video-holder iframe img,.section-opportunities .video-holder video img,.section-opportunities .video-holder .overlay img {
    width: 100%
}

.section-opportunities .video-holder .play-video {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    transform: translate(-50%, -50%)
}

.section-opportunities .video-holder.ready .overlay,.section-opportunities .video-holder.is-touch-device .overlay {
    display: none
}

.section-opportunities .video-holder.ready .videowrapp,.section-opportunities .video-holder.is-touch-device .videowrapp {
    z-index: 0
}

.section-opportunities .video-holder.ready .play-video,.section-opportunities .video-holder.is-touch-device .play-video,.section-opportunities .video-holder.ready .text-holder-video,.section-opportunities .video-holder.is-touch-device .text-holder-video {
    z-index: -1
}

.section-opportunities .video-holder .videowrapp {
    z-index: -1
}

.section-opportunities .play-video {
    background-image: url('/assets/images/play.svg');
    font-size: 0;
    border: none;
    background-color: transparent;
    width: 32px;
    height: 32px;
    background-size: 32px;
    transition: 0.3s
}

@media (min-width: 900px) {
    .section-opportunities .play-video {
        width:72px;
        height: 72px;
        background-size: 72px
    }
}

.section-opportunities .text-holder-video {
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 900px) {
    .section-opportunities .text-holder-video {
        bottom:20px
    }
}

.section-opportunities .text-holder-video p {
    text-align: center;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 14px
}

@media (min-width: 900px) {
    .section-opportunities .text-holder-video p {
        font-size:38px;
        line-height: 38px
    }
}

.section-photo-customize {
    padding: 50px 0 30px;
    position: relative
}

@media (min-width: 768px) {
    .section-photo-customize {
        padding:106px 0
    }
}

.section-photo-customize .container {
    padding: 0
}

@media (min-width: 768px) {
    .section-photo-customize .container {
        padding:0 15px
    }
}

.section-photo-customize .smile-icon {
    position: absolute;
    top: -58px;
    right: -5px
}

@media (min-width: 768px) {
    .section-photo-customize .smile-icon {
        top:-58px;
        right: 250px
    }
}

.section-photo-customize .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-photo-customize .smile-icon svg {
        width:122px
    }
}

.section-photo-customize .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-photo-customize .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-photo-customize .row {
    padding: 0
}

@media (min-width: 700px) {
    .section-photo-customize .row {
        padding:40px 0
    }
}

.section-photo-customize .row .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
    .section-photo-customize .row .wrapp-text {
        margin-left:100px
    }
}

.section-photo-customize .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 768px) {
    .section-photo-customize .wrapp-text {
        padding:0
    }
}

.section-photo-customize .wrapp-text .card-title h2 span {
    color: #90dade
}

.section-photo-customize .card-title {
    margin-bottom: 29px
}

.section-photo-customize .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-photo-customize .card-title h2 {
        font-size:45px
    }
}

.section-photo-customize p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-photo-customize p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-photo-customize a {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-photo-customize a {
        font-size:20px;
        line-height: 45px
    }
}

.section-photo-customize .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-photo-customize .card-img img {
        max-width:620px
    }
}

.section-pro-customize {
    padding: 40px 0;
    position: relative
}

@media (min-width: 768px) {
    .section-pro-customize {
        padding:106px 0
    }
}

.section-pro-customize.pro-customize-sets .row .card-title h2 span {
    color: #ff6c4d
}

.section-pro-customize.pro-customize-sets a {
    color: #ff6c4d
}

.section-pro-customize .smile-icon {
    position: absolute;
    top: -58px;
    right: -5px
}

@media (min-width: 768px) {
    .section-pro-customize .smile-icon {
        top:-58px;
        right: 250px
    }
}

.section-pro-customize .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-pro-customize .smile-icon svg {
        width:122px
    }
}

.section-pro-customize .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-pro-customize .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-pro-customize .row {
    padding: 0
}

@media (min-width: 700px) {
    .section-pro-customize .row {
        padding:40px 0
    }
}

.section-pro-customize .row .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
    .section-pro-customize .row .wrapp-text {
        margin-left:100px
    }
}

.section-pro-customize .row .card-title {
    margin-bottom: 29px
}

.section-pro-customize .row .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-pro-customize .row .card-title h2 {
        font-size:45px
    }
}

.section-pro-customize .row .card-title h2 span {
    color: #90dade
}

.section-pro-customize .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 700px) {
    .section-pro-customize .wrapp-text {
        padding:0
    }
}

.section-pro-customize p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-pro-customize p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-pro-customize a {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-pro-customize a {
        font-size:20px;
        line-height: 45px
    }
}

.section-pro-customize .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-pro-customize .card-img img {
        max-width:620px
    }
}

.section-blog .wrapp-blog {
    padding: 65px 0
}

.section-blog.custom-text .card-title p {
    color: #fff
}

.section-blog.custom-text .card-title strong {
    color: #ffe9db
}

.section-blog .card-title {
    position: relative
}

.section-blog .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: inline-block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-blog .card-title p {
        font-size:120px
    }
}

.section-blog .card-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: bold;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg);
    display: inline-block
}

.section-blog .card-title strong:after {
    content: \"\";
    background-image: url('/assets/images/underline.svg');
    background-repeat: no-repeat;
    display: block;
    width: 56px;
    height: 15px;
    position: absolute;
    background-size: 56px;
    bottom: 0;
    right: 21px
}

@media (min-width: 768px) {
    .section-blog .card-title strong:after {
        width:60px;
        height: 26px;
        background-size: 62px;
        right: 84px;
        bottom: -9px
    }
}

@media (min-width: 768px) {
    .section-blog .card-title strong {
        font-size:90px;
        margin-top: -54px;
        left: 6px
    }
}

.section-blog .card-info {
    max-width: 900px
}

.section-blog .card-info a {
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

.section-blog .card-info a:hover {
    text-decoration: underline
}

@media (min-width: 768px) {
    .section-blog .card-info a {
        font-size:24px
    }
}

.icon-user img {
    border-radius: 50px
}

.wrapp-intro-rpgd {
    position: relative;
    min-height: 370px;
    background-image: url('/assets/images/rgpd-4x.png');
    background-repeat: no-repeat;
    background-position: center 40px;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-rpgd {
        min-height:600px;
        background-position: center 50px
    }
}

@media (min-width: 1300px) {
    .wrapp-intro-rpgd {
        min-height:auto;
        height: 100vh;
        height: calc(var(--vh, 1vh) * 100);
        background-position: initial
    }
}

.wrapp-intro-rpgd:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-rpgd:before {
        height:250px
    }
}

.wrapp-intro-rpgd .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-content-rgpd {
    padding: 37px 0
}

@media (min-width: 768px) {
    .wrapp-content-rgpd {
        padding:80px 0
    }
}

.wrapp-content-rgpd .card-text h2 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    font-family: 'Centra No1';
    color: #707070
}

@media (min-width: 768px) {
    .wrapp-content-rgpd .card-text h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.wrapp-content-rgpd ul li {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-rgpd ul li {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-rgpd ul li a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-rgpd ul li a:hover {
    color: #ff6c4d
}

.wrapp-content-rgpd p {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-rgpd p {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-intro-mention {
    position: relative;
    min-height: 600px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1300px) {
    .wrapp-intro-mention {
        min-height:auto;
        height: 100vh;
        height: calc(var(--vh, 1vh) * 100);
        background-position: initial
    }
}

.wrapp-intro-mention:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-mention:before {
        height:250px
    }
}

.wrapp-intro-mention .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-intro-jobs {
    position: relative;
    background-color: #f67449;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

.wrapp-intro-jobs.wrapp-intro-jobs1 {
    background-color: #feccd5
}

.wrapp-intro-jobs:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-jobs:before {
        height:250px
    }
}

.wrapp-intro-jobs .card-img img {
    width: 100%;
    z-index: -2
}

.wrapp-intro-jobs .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-content-mention,.wrapp-content-jobs {
    padding: 37px 0
}

@media (min-width: 768px) {
    .wrapp-content-mention,.wrapp-content-jobs {
        padding:80px 0
    }
}

.wrapp-content-mention .card-text h2,.wrapp-content-jobs .card-text h2 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    font-family: 'Centra No1';
    color: #707070
}

@media (min-width: 768px) {
    .wrapp-content-mention .card-text h2,.wrapp-content-jobs .card-text h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.wrapp-content-mention ul li,.wrapp-content-jobs ul li {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention ul li,.wrapp-content-jobs ul li {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-mention ul li a,.wrapp-content-jobs ul li a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention ul li a:hover,.wrapp-content-jobs ul li a:hover {
    color: #ff6c4d
}

.wrapp-content-mention .list-marker li::before,.wrapp-content-jobs .list-marker li::before {
    content: '•';
    color: #707070;
    display: inline-block;
    margin-right: 5px
}

.wrapp-content-mention p,.wrapp-content-jobs p {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention p,.wrapp-content-jobs p {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-mention p a,.wrapp-content-jobs p a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention p a:hover,.wrapp-content-jobs p a:hover {
    color: #ff6c4d
}

.wrapp-content-mention a,.wrapp-content-jobs a {
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention a:hover,.wrapp-content-jobs a:hover {
    opacity: 0.8
}

.wrapp-content-mention .link-line,.wrapp-content-jobs .link-line {
    border-bottom: 3px solid #ff6c4d
}

.wrapp-content-mention .link-line .link,.wrapp-content-jobs .link-line .link {
    color: #ff6c4d;
    display: block;
    font-size: 16px;
    font-weight: 300;
    line-height: 45px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention .link-line .link,.wrapp-content-jobs .link-line .link {
        font-size:18px;
        line-height: 24px
    }
}

@media (max-width: 768px) {
    .wrapp-content-mention .wrapp-btns .btn,.wrapp-content-jobs .wrapp-btns .btn {
        padding:6px 12px
    }
}

.wrapp-intro-les-option:before {
    content: '';
    width: 100%;
    height: 300px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 80%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-les-option:before {
        height:340px;
        background-size: 122% 101%
    }
}

.wrapp-intro-les-option .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-intro-les-option .card-title {
    margin-top: 78px
}

.wrapp-intro-les-option .card-title .h1 {
    font-size: 38px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-les-option .card-title .h1 {
        font-size:45px;
        line-height: 53px
    }
}

.wrapp-accordion {
    padding: 10px
}

.wrapp-accordion .card-title p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .wrapp-accordion .card-title p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-accordion .card-title p strong {
    font-family: 'Centra No1'
}

.wrapp-accordion li.active .opener img {
    transform: rotate(-180deg)
}

.wrapp-accordion .opener {
    border-bottom: 3px solid #90dade;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 700;
    line-height: 20px;
    text-decoration: none
}

@media (min-width: 768px) {
    .wrapp-accordion .opener {
        font-size:18px;
        line-height: 28px
    }
}

.wrapp-accordion .opener:hover p {
    color: #ff6c4d
}

.wrapp-accordion .opener p span {
    color: #90dade
}

.wrapp-accordion .opener img {
    min-width: 20px;
    height: 11px;
    display: block;
    transition: 0.3s
}

.wrapp-accordion .wrapp-accordion-content {
    padding: 38px 0
}

.wrapp-accordion .wrapp-accordion-content .card-img {
    max-width: 200px
}

.wrapp-accordion .wrapp-accordion-content .card-img img {
    width: 100px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-accordion .wrapp-accordion-content .card-img img {
        width: auto
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text {
    flex-direction: column
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .card-text {
        flex-direction:row
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text p {
    color: #707070;
    font-size: 14px;
    line-height: 21px;
    font-family: 'Centra No1';
    font-weight: 300
}

@media (min-width: 768px) {
    .wrapp-accordion .wrapp-accordion-content .card-text p {
        font-size:18px;
        line-height: 28px
    }
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .card-text p {
        max-width:400px
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text p span {
    font-family: 'Centra No1';
    text-decoration: underline
}

.wrapp-accordion .wrapp-accordion-content .wrapp-btn {
    width: 100%
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .wrapp-btn {
        width:auto
    }
}

.wrapp-accordion .wrapp-accordion-content .btn {
    width: 100%;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    padding: 5px 42px
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .btn {
        min-width:198px
    }
}

.wrapp-intro-faq-page {
    position: relative;
    background-color: #e46a44;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page {
        height:400px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page {
        height:300px
    }
}

.wrapp-intro-faq-page:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page:before {
        height:400px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page:before {
        height:300px
    }
}

.wrapp-intro-faq-page .container-wrapp {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp {
        top:110px
    }
}

.wrapp-intro-faq-page .container-wrapp .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp .card-title {
        max-width:1120px
    }
}

.wrapp-intro-faq-page .container-wrapp .card-title .h1 {
    font-size: 38px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page .container-wrapp .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp .card-title .h1 {
        font-size:82px
    }
}

.section-intro-autocomplite {
    position: relative
}

.section-intro-autocomplite .wrapp-autocomplete {
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .section-intro-autocomplite .wrapp-autocomplete {
        top:-50px
    }
}

.section-intro-autocomplite .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: center;
    outline: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form input {
        font-size:18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 38px
    }
}

.section-intro-autocomplite .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-intro-autocomplite .autocomplete-form .ac-results {
    min-width: 300px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
    background-color: #fff;
    border-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto
}

.section-intro-autocomplite .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form .ac-results {
        min-width:600px;
        height: auto
    }
}

.section-intro-autocomplite .autocomplete-form .ac-results li {
    cursor: pointer
}

.section-intro-autocomplite .autocomplete-form .ac-results li:hover {
    color: #e46a44
}

.section-intro-autocomplite .card-img {
    padding: 15px 0 0
}

@media (min-width: 768px) {
    .section-intro-autocomplite .card-img {
        padding:50px 0 0
    }
}

.section-intro-autocomplite .card-img img {
    width: inherit;
    height: auto
}

.section-popular-question {
    padding: 80px 0
}

.section-popular-question .box-item {
    padding: 37px 34px 37px;
    border-radius: 17px;
    border: 3px solid #90dade;
    background-color: #90dade;
    margin-bottom: 30px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-popular-question .box-item {
        padding:58px 34px 56px
    }
}

.section-popular-question .box-item:hover {
    background-color: #fff
}

.section-popular-question .box-item:hover strong,.section-popular-question .box-item:hover p {
    color: #90dade
}

.section-popular-question .box-item strong {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 15px;
    height: 60px
}

.section-popular-question .box-item p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    width: 100%
}

.wrapp-intro-faq:before {
    content: '';
    width: 100%;
    height: 78px;
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-faq:before {
        height:300px
    }
}

.wrapp-intro-faq .card-title {
    margin-top: 110px
}

.wrapp-intro-faq .card-title .h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-faq .card-title .h1 {
        font-size:57px;
        line-height: 85px
    }
}

.wrapp-intro-faq .card-title .h1 img {
    width: 138px
}

@media (min-width: 768px) {
    .wrapp-intro-faq .card-title .h1 img {
        width:auto
    }
}

.wrapp-intro-faq.client:before {
    background-image: url('/assets/images/bg-light-blue-round.jpg')
}

.wrapp-intro-faq.prospect:before {
    background-image: url('/assets/images/bg-rose-clair-round.jpg')
}

.wrapp-intro-faq-content {
    padding: 120px 0
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content {
        padding:230px 0
    }
}

.wrapp-intro-faq-content .card-title h2 {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 700;
    font-size: 28px;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-title h2 {
        font-size:45px;
        line-height: 50px;
        letter-spacing: -1.8px
    }
}

.wrapp-intro-faq-content .card-text {
    position: relative
}

.wrapp-intro-faq-content .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-intro-faq-content .card-text a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-text a {
        font-size:20px;
        font-weight: 300;
        line-height: 45px
    }
}

.wrapp-intro-faq-content .list-category li a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 300;
    line-height: 45px
}

.wrapp-intro-faq-content .autocomplete-form {
    position: relative;
    width: 100%
}

.wrapp-intro-faq-content .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: center;
    outline: none;
    box-sizing: border-box;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form input {
        box-sizing:border-box;
        font-size: 18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 38px
    }
}

.wrapp-intro-faq-content .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-intro-faq-content .autocomplete-form .ac-results {
    min-width: 300px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 80px;
    left: 0%;
    padding: 0;
    background-color: #fff;
    border-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto
}

.wrapp-intro-faq-content .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form .ac-results {
        min-width:100%;
        height: 300px
    }
}

@media (min-width: 1080px) {
    .wrapp-intro-faq-content .autocomplete-form .ac-results {
        min-width:600px;
        height: auto
    }
}

.wrapp-intro-faq-content .autocomplete-form .ac-results li {
    cursor: pointer
}

.wrapp-intro-faq-content .autocomplete-form .ac-results li:hover {
    color: #e46a44
}

.wrapp-intro-article-blog {
    position: relative;
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1024px) {
    .wrapp-intro-article-blog {
        min-height:auto;
        height: 100%;
        min-height: 600px
    }
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog {
        min-height:800px
    }
}

.wrapp-intro-article-blog:after {
    content: '';
    width: 100%;
    height: 450px;
    background-image: url('/assets/images/big-layer.png');
    display: block;
    position: absolute;
    bottom: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog:after {
        background-size:100%;
        height: 750px
    }
}

.wrapp-intro-article-blog .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .wrapp-intro-article-blog .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog .bg-strech {
        min-height:800px
    }
}

.wrapp-content-article-blog {
    position: relative;
    top: -68px
}

@media (min-width: 1335px) {
    .wrapp-content-article-blog {
        top:-53px
    }
}

@media (min-width: 1440px) {
    .wrapp-content-article-blog {
        top:-73px
    }
}

.wrapp-content-article-blog .card-title .h1 {
    z-index: 5
}

.wrapp-content-article-blog .card-descrip {
    max-width: 840px;
    margin: 0 auto
}

.wrapp-content-article-blog .card-descrip p {
    z-index: 5;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 1024px) {
    .wrapp-content-article-blog .card-descrip p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-content-article-blog .next-section {
    z-index: 5;
    position: relative;
    top: 40px
}

.wrapp-content-article-blog .next-section.bounce {
    -moz-animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite
}

.wrapp-popup-social {
    position: fixed;
    z-index: 99;
    bottom: 10px;
    right: 10px
}

@media (min-width: 768px) {
    .wrapp-popup-social {
        top:50%;
        right: 15px;
        bottom: inherit
    }
}

.wrapp-popup-social .popup-social {
    position: relative
}

.wrapp-popup-social .popup-active .animate-top {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.wrapp-popup-social .popup-active .open i {
    display: none
}

.wrapp-popup-social .popup-active .open img {
    display: block
}

.wrapp-popup-social .popup-active .popup {
    top: -205px
}

.wrapp-popup-social .open {
    width: 58px;
    height: 60px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    background-color: #404040;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    z-index: 99
}

.wrapp-popup-social .open:hover {
    opacity: 0.8
}

.wrapp-popup-social .open i {
    display: block;
    font-size: 24px
}

.wrapp-popup-social .open img {
    display: none
}

.wrapp-popup-social .popup {
    position: absolute;
    top: -42px;
    left: -6px;
    transition: 0.3s;
    z-index: 0
}

.wrapp-popup-social .popup ul a:hover {
    opacity: 0.6
}

.wrapp-popup-social .text-button {
    color: #3975fc;
    font-family: 'Lucky Fellas';
    font-size: 42px;
    font-weight: 400;
    position: absolute;
    left: -172px;
    top: -36px;
    z-index: 0;
    display: none
}

@media (min-width: 768px) {
    .wrapp-popup-social .text-button {
        display:block
    }
}

.wrapp-popup-social .text-button:after {
    content: '';
    background-image: url('/assets/images/arrow-color.png');
    width: 68px;
    height: 40px;
    display: block;
    position: relative;
    left: 82px;
    top: -20px
}

.section-user-blog-post {
    padding: 72px 0
}

.section-user-blog-post img {
    width: 100%;
    border-radius: 26px
}

.section-user-blog-post .blog-full-image {
    width: 150%;
    margin-left: -25%
}

.section-user-blog-post h2 {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    line-height: 30px
}

@media (min-width: 768px) {
    .section-user-blog-post h2 {
        font-size:45px;
        line-height: 50px
    }
}

.section-user-blog-post .card-header {
    background-color: transparent;
    border: none;
    padding: 0 15px 30px
}

@media (min-width: 1024px) {
    .section-user-blog-post .card-header {
        padding:0 160px 80px
    }
}

.section-user-blog-post .card-text {
    padding: 0 15px 30px
}

@media (min-width: 1024px) {
    .section-user-blog-post .card-text {
        padding:0 160px 57px
    }
}

.section-user-blog-post .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .section-user-blog-post .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-user-blog-post .card-text .card-title {
    margin-bottom: 40px
}

.section-user-blog-post .card-img {
    padding-bottom: 73px
}

.section-user-blog-post .card-img img {
    width: 100%
}

.section-user-blog-post .card-img .name-autor {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    line-height: 15px;
    align-self: flex-start
}

@media (min-width: 768px) {
    .section-user-blog-post .card-img .name-autor {
        line-height:25px;
        font-size: 16px
    }
}

.section-user-blog-post .list-category a {
    border-radius: 17px;
    border: 1px solid #404040;
    text-decoration: none;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    transition: 0.3s;
    padding: 5px 9px
}

@media (min-width: 768px) {
    .section-user-blog-post .list-category a {
        font-size:13px;
        font-weight: 300;
        letter-spacing: -0.52px;
        padding: 10px 24px
    }
}

.section-user-blog-post .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.section-user-blog-post .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: underline;
    transition: 0.3s
}

.section-user-blog-post .wrapp-user-info .name a:hover {
    text-decoration: none
}

.section-user-blog-post .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

.section-user-blog-post .card-all-info-user .card-title h3 {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700
}

.section-user-blog-post .card-all-info-user .card-title h3 p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 31px;
    font-weight: 400;
    margin: 0;
    display: inline-block
}

.section-user-blog-post .card-all-info-user .card-desrip {
    margin-top: -20px;
    margin-bottom: 35px
}

.section-user-blog-post .card-all-info-user .card-desrip p {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 12px;
    font-weight: 300
}

.section-user-blog-post .card-img-user {
    position: relative
}

.section-user-blog-post .card-img-user a {
    position: absolute;
    bottom: 0;
    right: 0;
    max-width: 35px;
    border-radius: 50%;
    background-color: #fff;
    padding: 0px;
    text-decoration: none
}

.section-user-blog-post .card-img-user a .icon-linked-color {
    font-size: 24px
}

.card-like-post #preloader {
    display: none;
    height: 30px;
    width: 30px;
    border: 5px solid #4788c1;
    border-top: 5px solid #ff6c4d;
    border-radius: 50%;
    animation: rotate 1s infinite linear
}

@keyframes rotate {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg)
    }
}

.card-like-post .success-message {
    display: none
}

.card-like-post .title {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 50px
}

@media (min-width: 768px) {
    .card-like-post .title {
        font-size:28px;
        font-weight: 700;
        letter-spacing: -1.12px;
        line-height: 50px
    }
}

.card-like-post ul li a {
    text-decoration: none
}

.card-like-post ul li a:hover span {
    color: #ffc10e
}

.card-like-post ul li a span {
    font-size: 31px;
    color: #cbcbcb;
    transition: 0.3s
}

.card-like-post.vote-success .vote-holder {
    display: none
}

.card-like-post.vote-success .success-message {
    display: block
}

.card-like-post.vote-loading #preloader {
    display: block
}

.section-photo-blog {
    position: relative
}

.section-photo-blog:after {
    content: '';
    background-image: url('/assets/images/slide-bg-bottom.png');
    display: block;
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: contain;
    z-index: 1;
    position: absolute;
    height: 600px;
    bottom: 0
}

@media (min-width: 700px) {
    .section-photo-blog:after {
        background-image:url('/assets/images/slide-bg-bottom.png');
        background-size: contain
    }
}

.section-photo-blog .card-img img {
    width: 100%
}

.section-photo-blog .card-text h1 {
    font-size: 45px;
    font-weight: 900;
    color: #707070;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .section-photo-blog .card-text h1 {
        font-size:45px
    }
}

.section-photo-blog .card-text h1 span {
    color: #3975fc
}

.section-photo-blog .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-photo-blog .card-text a {
    position: relative;
    z-index: 99
}

.section-related-articles .card-title h3 {
    font-family: 'Centra No1';
    font-size: 23px;
    line-height: 39px;
    color: #fff;
    position: relative
}

@media (min-width: 768px) {
    .section-related-articles .card-title h3 {
        font-size:39px;
        line-height: 39px
    }
}

.section-related-articles .card-title h3 span {
    color: #3975fc
}

.section-related-articles .card-title h3:after {
    content: '';
    background-image: url('/assets/images/shape-article.png');
    background-repeat: no-repeat;
    width: 149px;
    height: 27px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -20px
}

.section-smile-club-bordeaux .slide-related-articles .slide-item {
    max-width: 400px;
    opacity: 0.5
}

.section-smile-club-bordeaux .slide-related-articles .slick-center,.section-smile-club-bordeaux .slide-related-articles .slick-active {
    opacity: 1
}

.slide-related-articles .slide-item {
    max-width: 306px
}

@media (min-width: 768px) {
    .slide-related-articles .slide-item {
        max-width:inherit
    }
}

.slide-related-articles .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center
}

.slide-related-articles .slick-dots li {
    margin: 10px;
    font-size: 0
}

.slide-related-articles .slick-dots li.slick-active button:before {
    content: '';
    background-color: #ff6c4d;
    opacity: 1
}

.slide-related-articles .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.slide-related-articles .slick-dots button {
    width: 8px;
    height: 8px;
    border: 1px solid #ff6c4d;
    z-index: 0;
    position: relative;
    background-color: transparent;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

.slide-related-articles .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

.slide-related-articles .card-box {
    margin: 10px
}

.slide-related-articles .card-box .card-body {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    background-color: #fff;
    position: relative;
    min-height: 122px
}

.slide-related-articles .card-box .list-category {
    position: absolute;
    bottom: 0;
    left: 0
}

.slide-related-articles .card-box .list-category a {
    white-space: nowrap;
    border-radius: 10px;
    background-color: #707070;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    padding: 7px 5px;
    text-decoration: none;
    border: 1px solid transparent;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .list-category a {
        padding:7px 16px
    }
}

.slide-related-articles .card-box .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.slide-related-articles .card-box .share-blog {
    position: absolute;
    background-color: #ff6c4d;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    padding: 16px 10px;
    top: -30px;
    right: 0;
    text-decoration: none
}

.slide-related-articles .card-box .share-blog i {
    font-size: 20px
}

.slide-related-articles .card-box .share-blog span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

.slide-related-articles .card-box .title a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: -0.8px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .title a {
        font-size:20px
    }
}

.slide-related-articles .card-box .title a:hover {
    color: #ff6c4d
}

.slide-related-articles .card-box .card-img {
    position: relative;
    height: 218px;
    overflow: hidden
}

.slide-related-articles .card-box .card-img img {
    width: 100%;
    border-radius: 20px
}

.slide-related-articles .card-box .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .wrapp-user-info .name a {
        font-size:14px
    }
}

.slide-related-articles .card-box .wrapp-user-info .name a:hover {
    color: #ff6c4d
}

.slide-related-articles .card-box .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 10px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .wrapp-user-info .post-date span {
        font-size:14px
    }
}

.wrapp-intro-pro {
    position: relative;
    min-height: 700px;
    background-image: url('/assets/images/pro.png');
    background-repeat: no-repeat;
    background-position: center 250px;
    background-size: cover;
    z-index: 0
}

.wrapp-intro-pro:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 230px
}

@media (min-width: 768px) {
    .wrapp-intro-pro:before {
        height:310px
    }
}

.wrapp-intro-pro .wrapp-btn {
    position: absolute;
    top: 158px;
    left: 50%;
    width: 100%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-pro .wrapp-btn {
        top:240px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .wrapp-btn {
        top:265px
    }
}

.wrapp-intro-pro .container {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container {
        top:110px
    }
}

.wrapp-intro-pro .container .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container .card-title {
        max-width:1120px
    }
}

.wrapp-intro-pro .container .card-title .h1 {
    font-size: 24px
}

@media (min-width: 768px) {
    .wrapp-intro-pro .container .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container .card-title .h1 {
        font-size:45px;
        padding-top: 36px
    }
}

.section-nos-solution {
    font-family: 'Centra No1';
    padding: 0 0 60px;
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0
}

.section-nos-solution img {
    width: 100%;
    padding: 3rem 0
}

@media (min-width: 1024px) {
    .section-nos-solution img {
        padding:6rem !important
    }
}

.section-nos-solution .container {
    position: relative;
    z-index: 5
}

.section-nos-solution .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .section-nos-solution .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .section-nos-solution .bg-strech {
        min-height:800px
    }
}

.section-nos-solution .card-title {
    text-align: center
}

.section-nos-solution .card-title .h1 {
    position: relative
}

.section-nos-solution .card-title .h1:after {
    content: '';
    width: 60px;
    height: 20px;
    background-image: url('/assets/images/shape-blue.png');
    display: block;
    position: absolute;
    background-size: 60px;
    bottom: -23px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 1024px) {
    .section-nos-solution .card-title .h1:after {
        width:120px;
        height: 40px;
        background-size: 120px;
        bottom: -46px
    }
}

.section-nos-solution .card-descrip {
    max-width: 840px;
    margin: 20px auto;
    position: relative;
    top: 35px
}

.section-nos-solution .card-descrip p {
    color: #707070;
    font-size: 18px;
    line-height: 28px;
    font-weight: 300
}

.section-nos-solution .card-descrip p a {
    color: #707070
}

.section-nos-solution .sub-title {
    position: relative;
    top: 84px
}

@media (min-width: 600px) {
    .section-nos-solution .sub-title {
        top:64px
    }
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title {
        top:137px
    }
}

@media (min-width: 1335px) {
    .section-nos-solution .sub-title {
        top:77px
    }
}

.section-nos-solution .sub-title strong {
    color: #3975fc;
    font-size: 71px;
    font-weight: 900;
    line-height: 86px;
    text-transform: uppercase;
    font-family: 'Centra No1';
    margin: 0;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title strong {
        font-size:95px;
        font-weight: 900
    }
}

.section-nos-solution .sub-title p {
    color: #ffad9f;
    font-family: 'Lucky Fellas';
    font-size: 87px;
    font-weight: 400;
    position: relative;
    top: -53px
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title p {
        font-size:90px;
        font-weight: 400
    }
}

.section-images-pro {
    margin-top: -141px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-images-pro {
        margin-top:-231px
    }
}

.wrapp-intro-category-faq {
    padding: 100px 0 50px
}

@media (min-width: 768px) {
    .wrapp-intro-category-faq {
        padding:250px 0 100px
    }
}

.wrapp-intro-category-faq .card-icon img {
    width: 68px
}

@media (min-width: 768px) {
    .wrapp-intro-category-faq .card-icon img {
        width:168px
    }
}

.wrapp-intro-category-faq ul li {
    border-bottom: 3px solid #ff6c4d;
    margin-bottom: 22px
}

.wrapp-intro-category-faq ul a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px;
    text-decoration: none
}

.wrapp-intro-category-faq .back-link {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 300;
    line-height: 45px;
    text-decoration: none
}

.wrapp-intro-blog {
    position: relative;
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1335px) {
    .wrapp-intro-blog {
        min-height:515px
    }
}

.section-intro-blog-contet {
    position: relative;
    background-repeat: no-repeat;
    background-position: top;
    background-size: 1024px;
    z-index: 0;
    background-image: url('/assets/images/union.png');
    padding: 64px 0;
    margin-top: -138px
}

@media (min-width: 768px) {
    .section-intro-blog-contet {
        padding:45px 0;
        margin-top: -138px
    }
}

@media (min-width: 1024px) {
    .section-intro-blog-contet {
        min-height:auto;
        height: 100%;
        background-size: 100% 100%;
        background-position: center;
        padding: 112px 0;
        margin-top: -138px
    }
}

@media (min-width: 1335px) {
}

.section-intro-blog-contet .hidden-post {
    display: none
}

.section-intro-blog-contet .autocomplete-form .instantsearch {
    position: relative
}

.section-intro-blog-contet .autocomplete-form .instantsearch.results-open input {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.section-intro-blog-contet .autocomplete-form .instantsearch .card-icon {
    position: absolute;
    right: 13px;
    top: 50%;
    transform: translateY(-50%)
}

.section-intro-blog-contet .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: left;
    outline: none;
    max-width: 300px;
    margin: 0 auto;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form input {
        font-size:18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 55px 18px 20px;
        max-width: inherit;
        min-width: 520px
    }
}

.section-intro-blog-contet .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none;
    color: #afafaf
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results {
    min-width: 294px;
    -moz-box-shadow: 2px 13px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 2px 13px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 43px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto;
    z-index: 5;
    -webkit-appearance: none
}

.section-intro-blog-contet .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form .ac-results {
        min-width:100%;
        width: auto;
        height: auto;
        padding: 0 30px 30px;
        top: 63px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .section-intro-blog-contet .autocomplete-form .ac-results {
        min-width:100%;
        width: 100%;
        top: 56px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results li {
    display: flex;
    cursor: pointer
}

.section-intro-blog-contet .autocomplete-form .ac-results li:first-child {
    border-top: 1px solid #f4f4f4;
    padding-top: 10px
}

.section-intro-blog-contet .autocomplete-form .ac-results li:hover .title {
    color: #e46a44
}

.section-intro-blog-contet .autocomplete-form .ac-results li:hover .img {
    opacity: 0.6
}

.section-intro-blog-contet .autocomplete-form .ac-results .img {
    width: 55px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px
}

.section-intro-blog-contet .autocomplete-form .ac-results .img img {
    width: 55px;
    height: 54px;
    border-radius: 50%
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-intro-blog-contet .autocomplete-form .ac-results .img img {
        width: auto
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results .title {
    color: #000;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 20px;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form .ac-results .title {
        font-size:18px;
        line-height: 40px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results .title:hover {
    color: #e46a44
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li {
    margin-right: 15px;
    color: #696969;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    transition: 0.3s;
    letter-spacing: -0.44px;
    display: flex;
    align-items: center
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:first-child {
    border-top: none;
    padding-top: 0
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:last-child:after {
    content: none
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:after {
    content: '';
    width: 4px;
    height: 1px;
    background-color: #696969;
    display: block;
    margin-left: 10px
}

.section-intro-blog-contet .list-links a {
    font-size: 12px;
    line-height: 39px;
    padding: 0px 7px
}

.section-intro-blog-contet .list-links a.active {
    background-color: #ff6c4d;
    color: #fff
}

@media (min-width: 768px) {
    .section-intro-blog-contet .list-links a {
        font-size:20px;
        padding: 4px 32px
    }
}

.section-intro-blog-contet .card-box {
    margin: 10px
}

.section-intro-blog-contet .card-box .card-body {
    position: relative;
    padding: 9px 8px 25px 0
}

.section-intro-blog-contet .card-box .list-category {
    position: absolute;
    bottom: 0;
    left: 0
}

.section-intro-blog-contet .card-box .list-category a {
    border-radius: 17px;
    border: 1px solid #fff;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    padding: 7px 5px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .list-category a {
        padding:7px 16px;
        font-size: 15px
    }
}

.section-intro-blog-contet .card-box .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.section-intro-blog-contet .card-box .share-blog {
    position: absolute;
    background-color: #ff6c4d;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    padding: 16px 10px;
    top: -30px;
    right: 0;
    text-decoration: none
}

.section-intro-blog-contet .card-box .share-blog i {
    font-size: 20px
}

.section-intro-blog-contet .card-box .share-blog span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 22px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

.section-intro-blog-contet .card-box .title a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .title a {
        font-size:19px;
        line-height: 23px
    }
}

.section-intro-blog-contet .card-box .title a:hover {
    color: #ff6c4d
}

.section-intro-blog-contet .card-box .card-img {
    position: relative
}

.section-intro-blog-contet .card-box .card-img img {
    width: 100%;
    border-radius: 20px
}

.section-intro-blog-contet .card-box .wrapp-user-info {
    margin-bottom: 3rem
}

.section-intro-blog-contet .card-box .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .wrapp-user-info .name a {
        font-size:14px
    }
}

.section-intro-blog-contet .card-box .wrapp-user-info .name a:hover {
    color: #ff6c4d
}

.section-intro-blog-contet .card-box .wrapp-user-info .name {
    text-decoration: underline
}

.section-intro-blog-contet .card-box .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 10px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .wrapp-user-info .post-date span {
        font-size:14px
    }
}

.section-intro-blog-contet .filter-col {
    display: none
}

@media (min-width: 768px) {
    .section-intro-blog-contet .filter-col {
        display:block
    }
}

.section-intro-blog-contet .wrapp-popup-filter .top-line {
    display: none
}

.section-intro-blog-contet .wrapp-popup-filter .top-line .wrapp-autocomplete {
    display: none !important
}

.section-intro-blog-contet .wrapp-popup-filter .wrapp-counts {
    display: none
}

.section-intro-blog-contet .custom-control {
    margin-bottom: 30px
}

.section-intro-blog-contet .custom-control-label::before {
    width: 19px;
    height: 21px;
    top: -3px;
    left: -33px;
    border: #ff6c4d solid 1px
}

.section-intro-blog-contet .custom-control-label::after {
    width: 19px;
    height: 21px;
    top: -3px;
    left: -33px
}

.section-intro-blog-contet .custom-control-label {
    color: #4a4545;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 20px;
    margin-left: 12px
}

.section-intro-blog-contet .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #ff6c4d;
    background-color: #ff6c4d
}

.filter-active #header {
    z-index: 0
}

.filter-active .section-intro-blog-contet .filter-col {
    display: block
}

.filter-active .section-intro-blog-contet .wrapp-popup-filter .top-line .wrapp-autocomplete {
    display: flex !important
}

.filter-active .wrapp-popup-filter {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999
}

.filter-active .wrapp-popup-filter .wrapp-filter {
    min-height: 568px;
    height: 100%;
    overflow: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .filter-active .wrapp-popup-filter .wrapp-filter {
        min-height:300px
    }
}

.filter-active .wrapp-popup-filter .top-line {
    position: relative;
    min-height: 200px;
    display: block
}

.filter-active .wrapp-popup-filter .top-line:after {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url('/assets/images/layer-bg-topp.png');
    display: block;
    position: absolute;
    bottom: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 0
}

.filter-active .wrapp-popup-filter .card-title {
    position: absolute;
    top: 44px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1
}

.filter-active .wrapp-popup-filter .card-title h1 {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

.filter-active .wrapp-popup-filter .card-title h1 p {
    color: #3975fc;
    font-family: 'Lucky Fellas';
    font-size: 46px;
    font-weight: 400;
    display: inline-block;
    margin: 0
}

.filter-active .wrapp-popup-filter .wrapp-autocomplete {
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 99;
    display: flex !important
}

.filter-active .wrapp-popup-filter .tags-form {
    padding: 0 15px 110px
}

.filter-active .wrapp-popup-filter .wrapp-counts {
    position: fixed;
    bottom: 0;
    right: -15px;
    background-color: #404040;
    border-top-left-radius: 26px;
    display: block
}

.filter-active .wrapp-popup-filter .wrapp-counts p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 19px;
    font-weight: 300;
    letter-spacing: -0.76px;
    line-height: 20px;
    margin: 0;
    padding: 20px
}

.filter-active .wrapp-popup-filter .filter-opener {
    position: fixed;
    display: block;
    left: -15px;
    bottom: 0;
    top: inherit;
    border-radius: 0 26px 0 0;
    background-color: #e46a44;
    display: flex;
    align-items: center;
    justify-content: center
}

.wrapp-intro-josepho {
    position: relative;
    background-color: #95d8d6;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0;
    z-index: 0;
    height: 65vh;
    overflow: hidden
}

.wrapp-intro-josepho.wrapp-intro-jobs1 {
    background-color: #feccd5
}

.wrapp-intro-josepho:before {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-josepho:before {
        height:250px
    }
}

.wrapp-intro-josepho .card-img img {
    width: 100%;
    z-index: -2
}

.section-josepho-content.customize {
    height: auto
}

.section-josepho-content.customize .wrapp-slide-trust {
    background-image: url('/assets/images/pink-fg.png');
    padding: 129px 0 184px;
    height: 320px;
    margin-top: 0
}

@media (min-width: 900px) {
    .section-josepho-content.customize .wrapp-slide-trust {
        padding:172px 0 75px;
        background-size: contain;
        background-position: center;
        margin-top: 0
    }
}

.section-josepho-content.customize .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-content.customize .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 29px
    }
}

.section-josepho-content .wrapp-slide-trust {
    max-width: 1080px;
    background-image: url('/assets/images/bgsml-blue-2x.png');
    background-repeat: no-repeat;
    width: 100%;
    padding: 129px 0 184px;
    overflow: hidden;
    background-size: cover;
    height: 270px;
    background-position: center;
    margin-top: -200px;
    z-index: 5
}

@media (min-width: 900px) {
    .section-josepho-content .wrapp-slide-trust {
        padding:130px 0;
        background-size: contain;
        background-position: center;
        margin-top: 0
    }
}

.section-josepho-family .wrapp-josepho-family h1 {
    position: relative;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family h1 {
        font-size:45px
    }
}

.section-josepho-family .wrapp-josepho-family h1:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -15px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family h1:after {
        width:125px;
        height: 20px;
        background-size: 125px;
        bottom: -25px
    }
}

.section-josepho-family .wrapp-josepho-family .card-descrip {
    max-width: 600px;
    margin: 0 auto
}

.section-josepho-family .wrapp-josepho-family .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-descrip p {
        font-size:18px;
        font-weight: 300;
        line-height: 29px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2 {
    color: #90dade;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2::before {
    content: '';
    background-image: url('/assets/images/left-arr.svg');
    width: 45px;
    height: 17px;
    display: block;
    margin-right: 10px;
    background-size: 45px;
    background-repeat: no-repeat
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2::before {
        width:90px;
        height: 34px;
        background-size: 90px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2::after {
    content: '';
    background-image: url('/assets/images/right-arr.svg');
    width: 45px;
    height: 21px;
    display: block;
    margin-left: 20px;
    background-repeat: no-repeat;
    background-size: 45px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2::after {
        width:90px;
        height: 42px;
        background-size: 90px;
        position: relative;
        top: -10px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-team h2 {
    color: #90dade;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px;
    position: relative;
    z-index: 1
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-team h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-team h2::after {
    content: '';
    background-image: url('/assets/images/serd.svg');
    width: 36px;
    height: 49px;
    display: block;
    margin-left: 20px;
    background-repeat: no-repeat;
    background-size: 36px;
    position: absolute;
    right: -45px;
    top: -28px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-team h2::after {
        width:74px;
        height: 98px;
        background-size: 74px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img {
    width: 90px;
    height: 90px;
    position: relative
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img {
        width:180px;
        height: 180px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img img {
    width: 90px;
    height: 90px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img img {
        width:180px;
        height: 180px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img .social-link {
    position: absolute;
    left: 0px;
    bottom: 0
}

.section-josepho-family .wrapp-josepho-family .card-img .social-link img {
    width: 30px;
    height: auto
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width: auto;
        min-width: 30px
    }
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width:60px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width:auto;
        min-width: 60px
    }
}

.section-josepho-family .wrapp-josepho-family .card-name p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-name p {
        font-size:18px;
        line-height: 29px
    }
}

.wrapp-intro-bordeaux {
    position: relative;
    min-height: 568px;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux {
        height:100vh;
        height: calc(var(--vh, 1vh) * 100)
    }
}

.wrapp-intro-bordeaux:before {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url(/assets/images/white-round.png);
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux:before {
        height:27vh
    }
}

.wrapp-intro-bordeaux .card-title {
    position: relative
}

.wrapp-intro-bordeaux .bg-strech {
    min-height: 300px;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -1
}

.wrapp-intro-bordeaux .bg-strech .h1 {
    color: white
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .bg-strech {
        min-height:92vh
    }
}

.wrapp-intro-bordeaux .bg-strech .wrapp-btn {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%);
    width: 100%
}

.wrapp-intro-bordeaux .card-sub-title {
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    bottom: 32px
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title {
        bottom:163px
    }
}

.wrapp-intro-bordeaux .card-sub-title p {
    color: #ff6c4d;
    font-size: 104px;
    font-weight: 400;
    font-family: 'Lucky Fellas';
    z-index: 1;
    display: block
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title p {
        font-size:133px
    }
}

.wrapp-intro-bordeaux .card-sub-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 57px;
    font-weight: 900;
    line-height: 75px;
    position: relative;
    z-index: -1;
    top: -54px;
    transform: rotate(-5deg)
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title strong {
        font-size:80px
    }
}

.wrapp-intro-bordeaux .card-sub-title strong p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 104px;
    font-weight: 400;
    position: absolute;
    right: -27px;
    top: 0
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title strong p {
        font-size:233px;
        right: -65px
    }
}

.wrapp-intro-bordeaux .next-section {
    position: absolute;
    display: none;
    left: 50%;
    transform: translate(-50%);
    bottom: 100px
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .next-section {
        display:block
    }
}

.wrapp-intro-bordeaux .next-section.bounce {
    -moz-animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite
}

@-moz-keyframes bounce {
    0%,20%,50%,80%,100% {
        -moz-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -moz-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -moz-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

@-webkit-keyframes bounce {
    0%,20%,50%,80%,100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

@keyframes bounce {
    0%,20%,50%,80%,100% {
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -moz-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -moz-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

.wrapp-bordeaux-content .card-img {
    position: relative
}

.wrapp-bordeaux-content .card-img img {
    max-width: 517px;
    width: 100%
}

.wrapp-bordeaux-content .card-img .text {
    position: absolute;
    right: 75%;
    top: 50%;
    display: none
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-content .card-img .text {
        display:block
    }
}

.wrapp-bordeaux-content .card-img .text p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 35px;
    font-weight: 400
}

.wrapp-bordeaux-content .card-img .text p:after {
    content: '';
    background-image: url('/assets/images/rimg.png');
    display: block;
    background-repeat: no-repeat;
    width: 98px;
    height: 28px;
    background-size: 98px
}

.wrapp-bordeaux-content .card-text li {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.wrapp-bordeaux-content .card-text li::before {
    display: inline-block;
    content: '';
    -webkit-border-radius: 0.375rem;
    border-radius: 0.375rem;
    height: 0.4rem;
    width: 0.4rem;
    margin-right: 0.5rem;
    background-color: orangered
}

.wrapp-bordeaux-question {
    z-index: 1
}

.wrapp-bordeaux-question .bg-strech {
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    width: 100%;
    z-index: -1;
    margin-top: -285px;
    padding: 380px 0 40px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .bg-strech {
        padding:286px 0 42px;
        margin-top: 0
    }
}

.wrapp-bordeaux-question .bg-strech .wrapp-btn {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%)
}

.wrapp-bordeaux-question .row-question {
    position: relative
}

.wrapp-bordeaux-question .row-question .col-item {
    display: flex;
    align-items: center;
    justify-content: center
}

.wrapp-bordeaux-question .row-question .col-item:first-child {
    align-items: center;
    justify-content: center
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item:first-child {
        align-items:flex-end;
        justify-content: flex-end
    }
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item:last-child {
        align-items:flex-start;
        justify-content: flex-start
    }
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item .card-item {
        padding:0px 100px
    }
}

.wrapp-bordeaux-question .card-img {
    width: 178px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-img {
        width:250px
    }
}

.wrapp-bordeaux-question .card-img img {
    border-radius: 50%;
    width: 178px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-img img {
        width:250px
    }
}

.wrapp-bordeaux-question .card-img .icon-sicial {
    position: absolute;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    background-color: #fff;
    width: 66px;
    height: 66px
}

.wrapp-bordeaux-question .card-img .icon-sicial img {
    width: 100%;
    position: relative;
    top: 3px
}

.wrapp-bordeaux-question .card-descrip p {
    font-size: 14px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-descrip p {
        font-size:20px
    }
}

.wrapp-bordeaux-question p,.wrapp-bordeaux-question a,.wrapp-bordeaux-question li p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s
}

.wrapp-bordeaux-question a:hover {
    color: #ff6c4d
}

.wrapp-bordeaux-question i {
    font-size: 24px;
    width: 24px
}

.section-bordeaux-question {
    z-index: 1;
    position: relative
}

.section-smile-club-bordeaux {
    margin-top: -200px;
    padding-top: 300px;
    padding-bottom: 100px;
    z-index: 0
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux {
        margin-top:-300px;
        padding-bottom: 80px
    }
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title.first-top {
        position:static
    }
}

.section-smile-club-bordeaux .card-title strong {
    display: block;
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title strong {
        font-size:110px
    }
}

.section-smile-club-bordeaux .card-title p {
    color: #ffe9db;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title p {
        font-size:143px;
        top: -60px
    }
}

.section-smile-club-bordeaux .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 285px
    }
}

.section-mention-contet .card-icon {
    position: relative;
    top: -35px
}

.section-mention-contet .card-icon img {
    width: 146px;
    height: 68px
}

@media (min-width: 768px) {
    .section-mention-contet .card-icon img {
        width:282px;
        height: 132px
    }
}

.wrapp-intro-jobs .card-title {
    position: relative;
    margin-top: 120px
}

.wrapp-intro-booking_index {
    position: relative
}

.wrapp-intro-booking_index .jcf-select {
    display: inline-block;
    vertical-align: top;
    position: relative;
    border: none;
    background-color: #f2f2f2;
    margin: 0 0 12px;
    min-width: 150px;
    height: 26px
}

.wrapp-intro-booking_index:before {
    content: '';
    width: 100%;
    height: 250px;
    background-image: url('/assets/images/blue-layer.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index:before {
        height:350px
    }
}

.wrapp-intro-booking_index .card-title {
    padding-top: 90px
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title {
        padding-top:110px
    }
}

.wrapp-intro-booking_index .card-title h1 {
    color: #90dade;
    margin-bottom: 0;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    line-height: 46px;
    transform: rotate(-5deg);
    z-index: 0
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title h1 {
        font-size:50px
    }
}

.wrapp-intro-booking_index .card-title p {
    font-family: 'Lucky Fellas';
    color: #ffe9db;
    font-size: 81px;
    font-weight: 400;
    position: relative;
    top: -40px;
    z-index: 1
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title p {
        font-size:100px
    }
}

.wrapp-intro-booking_index .card-title .card-img {
    margin-top: -50px
}

.wrapp-intro-booking_index .card-title .card-img img {
    width: 71px
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title .card-img img {
        width:92px
    }
}

.section-booking_index-content {
    padding: 50px 0
}

.section-booking_index-content .card-title-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.section-booking_index-content .card-descrip-text {
    margin-bottom: 63px
}

.section-booking_index-content .card-descrip-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-booking_index-content .card-wrapp-btns .title {
    margin-bottom: 33px
}

.section-booking_index-content .card-wrapp-btns strong {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 19px;
    font-weight: 700;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-booking_index-content .card-wrapp-btns .btn {
        padding:11px 17px
    }
}

@media (min-width: 1024px) {
    .section-booking_index-content .card-wrapp-btns .btn {
        padding:11px 42px
    }
}

.wrapp-intro-achat-confirmation {
    margin-top: 100px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation {
        margin-top:150px
    }
}

.wrapp-intro-achat-confirmation .card-title strong {
    display: block;
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title strong {
        font-size:110px
    }
}

.wrapp-intro-achat-confirmation .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title p {
        font-size:143px;
        top: -60px
    }
}

.wrapp-intro-achat-confirmation .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 285px
    }
}

.section-achat-confirmation-content {
    margin-top: -70px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content {
        margin-top:0
    }
}

.section-achat-confirmation-content .wrapp-achat-confirmation-content .card-title {
    margin-bottom: 57px
}

.section-achat-confirmation-content .card-img {
    position: relative;
    margin-bottom: 30px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .card-img {
        margin-bottom:133px
    }
}

.section-achat-confirmation-content .card-img img {
    width: 100%
}

.section-achat-confirmation-content .card-img .smile-icon {
    position: absolute;
    right: 0px;
    top: -80px
}

@media (min-width: 1024px) {
    .section-achat-confirmation-content .card-img .smile-icon {
        top:-80px
    }
}

.section-achat-confirmation-content .card-img .smile-icon svg {
    width: 79px
}

@media (min-width: 1024px) {
    .section-achat-confirmation-content .card-img .smile-icon svg {
        width:auto
    }
}

.section-achat-confirmation-content .card-descrip,.section-achat-confirmation-content form {
    max-width: 620px;
    margin: 7% auto
}

.section-achat-confirmation-content .card-descrip p,.section-achat-confirmation-content form p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 20px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .card-descrip p,.section-achat-confirmation-content form p {
        font-size:18px;
        line-height: 28px
    }
}

.section-achat-confirmation-content .input-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    border: none;
    padding: 9px 31px;
    width: 100%;
    max-width: 404px;
    height: auto;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2)
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .input-control {
        padding:17px 31px;
        font-size: 18px;
        line-height: 27px;
        min-width: 497px
    }
}

.section-achat-confirmation-content .input-control::placeholder {
    color: #707070
}

.section-achat-confirmation-content .input-control.input-error {
    box-shadow: 0 0px 4px 2px rgba(255, 0, 0, 0.9)
}

.section-achat-confirmation-content .custom-label {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    line-height: 20px;
    margin-left: 10px;
    margin-bottom: 20px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .custom-label {
        font-size:18px
    }
}

.datepicker-popup {
    position: relative
}

.datepicker-popup .wrapp-datepiker-drop {
    position: absolute;
    top: 100%;
    left: -9999px;
    z-index: 10
}

.datepicker-popup .datepicker-drop {
    display: flex !important;
    flex-direction: column;
    justify-content: space-between
}

.datepicker-popup.datepicker-active .wrapp-datepiker-drop {
    left: 0
}

.steps-section .progress-bar {
    position: fixed;
    top: 0;
    width: 100%;
    left: 0;
    height: 6px;
    background-color: #fff;
    z-index: 100
}

@media (min-width: 768px) {
    .steps-section .progress-bar {
        height:10px
    }
}

.steps-section .progress-bar .progress {
    background-color: #3975fc;
    border-radius: 0
}

.datepicker-opener {
    text-decoration: none
}

.datepicker-opener:hover {
    text-decoration: none
}

.steps-section {
    position: relative
}

.steps-section:after {
    content: '';
    width: 121px;
    height: 69px;
    background-image: linear-gradient(270deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
    display: block;
    position: absolute;
    right: -2px;
    top: 0%
}

@media (min-width: 768px) {
    .steps-section:after {
        content:none
    }
}

.steps-section:before {
    content: '';
    width: 121px;
    height: 69px;
    background-image: linear-gradient(to right, #fff 0%, rgba(255, 255, 255, 0) 100%);
    display: block;
    position: absolute;
    left: -2px;
    top: 0%;
    z-index: 1
}

@media (min-width: 768px) {
    .steps-section:before {
        content:none
    }
}

@media (min-width: 768px) {
    .steps-section form {
        padding-top:64px
    }
}

.wrapp-steps {
    margin: 105px 0px 30px;
    transform: translateX(50%);
    position: relative !important
}

@media (min-width: 768px) {
    .wrapp-steps {
        border-radius:50px;
        max-width: 54vw;
        margin: 27px 0;
        background: white;
        padding: 10px 0;
        position: fixed !important;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 100;
        -webkit-box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24);
        -moz-box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24);
        box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24)
    }
}

.wrapp-steps .steps-progress {
    position: relative
}

@media (min-width: 768px) {
    .wrapp-steps .steps-progress {
        margin:0 10px
    }
}

.wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
    content: '';
    width: 100%;
    height: 1px;
    background-color: #ed6c59;
    display: block;
    position: absolute;
    z-index: 0
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
        width: 72%
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
        width:80%
    }
}

.wrapp-steps .steps-progress:before {
    left: 0;
    top: 23px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before {
        left: 235px
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before {
        left:83px
    }
}

.wrapp-steps .steps-progress:after {
    left: 0;
    top: 31px;
    z-index: -1
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:after {
        left: 235px
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:after {
        left:83px
    }
}

.wrapp-steps .steps-progress li {
    width: 57px;
    height: 57px;
    border-radius: 50%;
    border: 1px solid #ed6c59;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 0;
    position: relative
}

.wrapp-steps .steps-progress li.active {
    cursor: pointer
}

.wrapp-steps .steps-progress li.active span {
    background-color: #ed6c59;
    color: #fff;
    border: 2px solid #ed6c59
}

.wrapp-steps .steps-progress li.current {
    cursor: inherit
}

.wrapp-steps .steps-progress li:first-child:before {
    content: none
}

.wrapp-steps .steps-progress li:last-child:after {
    content: none
}

.wrapp-steps .steps-progress li:before,.wrapp-steps .steps-progress li:after {
    content: '';
    width: 7px;
    height: 8px;
    background-color: #fff;
    display: block;
    position: absolute;
    top: 49%;
    transform: translateY(-50%)
}

.wrapp-steps .steps-progress li:before {
    left: -1px
}

.wrapp-steps .steps-progress li:after {
    right: -1px
}

.wrapp-steps .steps-progress li p {
    width: 54.5px;
    height: 54.5px;
    display: flex;
    align-items: center;
    flex-shrink: 0;
    justify-content: center;
    background-color: #fff;
    margin: 0;
    padding: 5px;
    z-index: 5;
    border-radius: 50%
}

.wrapp-steps .steps-progress li span {
    color: #ed6c59;
    font-size: 23px;
    font-weight: 700;
    border: 1px solid #ed6c59;
    z-index: 5;
    width: 46px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center
}

.steps-progress {
    display: flex;
    align-items: center;
    justify-content: space-between
}

.wrapp-steps {
    position: relative
}

.steps-section .step {
    display: none;
    height: 100%;
    position: relative;
    margin-bottom: 270px;
    padding: 50px 0 0
}

@media (min-width: 768px) {
    .steps-section .step {
        padding:100px 0 0
    }
}

.steps-section .step.active {
    display: flex
}

.steps-section .step.step-inner {
    padding: 50px 0 0;
    margin-bottom: 100px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner {
        padding:50px 0 0
    }
}

.steps-section .step.step-inner .step-bottom {
    z-index: 1;
    position: fixed;
    left: 0;
    width: 100%;
    padding: 3px 0px 9px;
    height: 88px;
    bottom: 58px;
    background-color: #fff
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom {
        bottom:72px;
        height: 94px;
        background-color: #fff;
        box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
    }
}

@media (min-width: 1360px) {
    .steps-section .step.step-inner .step-bottom {
        bottom:0
    }
}

.steps-section .step.step-inner .step-bottom.custom {
    padding: 19px 0 21px;
    height: auto
}

.steps-section .step.step-inner .step-bottom.custom .next-step {
    position: static
}

.steps-section .step.step-inner .step-bottom .next-step {
    position: relative;
    top: -12px
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons .btn {
    padding: 6px 9px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom .wrapp-buttons .btn {
        padding:11px 42px
    }
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons .next-step {
    position: relative;
    top: 0px
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons span {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom .wrapp-buttons span {
        color:#707070;
        font-size: 28px
    }
}

.steps-section .step .hidden-field {
    opacity: 0;
    position: fixed;
    left: 0;
    top: 0;
    z-index: -9999
}

.steps-section .step.min-info {
    height: 100%;
    padding: 50px 0 0;
    margin-bottom: 120px
}

@media (min-width: 768px) {
    .steps-section .step.min-info {
        padding:10vh 0 0
    }
}

.steps-section .step .wrapp-item-control {
    margin-bottom: 30px;
    padding: 0 15px
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control {
        margin-bottom:50px
    }
}

.steps-section .step .wrapp-item-control label {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control label {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .wrapp-item-control .custom-label {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    line-height: 20px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control .custom-label {
        font-size:18px
    }
}

.steps-section .step .title {
    margin-bottom: 33px;
    padding: 0 15px;
    position: relative
}

.steps-section .step .title p {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .title p {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .title:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .step .title-step {
    margin-bottom: 50px;
    position: relative
}

.steps-section .step .title-step p {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .title-step p {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .title-step:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .step-inner .wrapp-item-control {
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .step-inner .wrapp-item-control {
        width:auto
    }
}

.steps-section .step-inner .wrapp-item-control .input-control {
    max-width: 100%
}

@media (min-width: 768px) {
}

.steps-section .back-link {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px;
    text-decoration: none
}

@media (min-width: 768px) {
    .steps-section .back-link {
        font-size:20px;
        font-weight: 300;
        line-height: 45px
    }
}

.steps-section .wrapp-static-info {
    border-radius: 12px;
    background-color: transparent;
    padding: 15px;
    margin-bottom: 35px
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info {
        background-color:#f4f4f4;
        padding: 47px 53px
    }
}

.steps-section .wrapp-static-info p {
    color: #707070;
    word-break: break-all;
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.steps-section .wrapp-static-info p span {
    font-family: 'Centra No1'
}

.steps-section .wrapp-static-info li {
    margin-bottom: 44px
}

.steps-section .wrapp-static-info li:last-child {
    margin-bottom: 0
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info li {
        margin-bottom:25px
    }
}

.steps-section .wrapp-static-info a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    text-decoration: underline;
    transition: 0.3s
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info a {
        font-size:18px;
        line-height: 28px
    }
}

.steps-section .wrapp-static-info a:hover {
    text-decoration: none
}

.steps-section .wrapp-jobox-info {
    border-radius: 12px;
    background-color: #404040;
    padding: 37px 32px;
    margin-bottom: 44px;
    position: relative
}

.steps-section .wrapp-jobox-info .title:after {
    content: none
}

.steps-section .wrapp-jobox-info h2 {
    font-size: 28px
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info h2 {
        font-size:45px
    }
}

.steps-section .wrapp-jobox-info:before {
    content: '';
    background-image: url('/assets/images/chesse1-2x.png');
    width: 88px;
    height: 88px;
    background-size: 88px;
    position: absolute;
    top: -25px;
    right: -15px
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info:before {
        width:105px;
        height: 105px;
        background-size: 105px;
        top: -52px;
        right: -52px
    }
}

.steps-section .wrapp-jobox-info .modif {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    text-decoration: underline;
    transition: 0.3s
}

.steps-section .wrapp-jobox-info .modif:hover {
    text-decoration: none
}

.steps-section .wrapp-jobox-info ul li {
    border-bottom: 1px solid #fff;
    margin: 0 0 20px
}

.steps-section .wrapp-jobox-info ul a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 1024px) {
    .steps-section .wrapp-jobox-info ul a {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.steps-section .wrapp-jobox-info ul a:hover {
    color: #ff6c4d
}

.steps-section .wrapp-jobox-info ul a:hover span::before,.steps-section .wrapp-jobox-info ul a:hover span::after {
    background-color: #ff6c4d
}

.steps-section .wrapp-jobox-info span {
    position: relative;
    margin-top: -7px
}

.steps-section .wrapp-jobox-info span::before,.steps-section .wrapp-jobox-info span::after {
    position: absolute
}

.steps-section .wrapp-jobox-info span::before {
    content: '';
    width: 3px;
    height: 20px;
    display: block;
    background-color: #fff;
    border-radius: 1.5px;
    top: -9px;
    right: 20px;
    transform: rotate(45deg)
}

.steps-section .wrapp-jobox-info span::after {
    content: '';
    width: 3px;
    height: 20px;
    display: block;
    background-color: #fff;
    border-radius: 1.5px;
    top: -9px;
    right: 20px;
    transform: rotate(-45deg)
}

.steps-section .wrapp-jobox-info .wrapp-btn .btn {
    padding: 6px 18px
}

.steps-section .wrapp-jobox-info .wrapp-btn .btn:hover {
    color: #ff6c4d
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info .wrapp-btn .btn {
        padding:11px 11px
    }
}

@media (min-width: 1024px) {
    .steps-section .wrapp-jobox-info .wrapp-btn .btn {
        padding:11px 42px
    }
}

.steps-section .card-trust img {
    width: 100%
}

.steps-section .form-group {
    padding: 0 15px
}

.steps-section .input-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #808080;
    font-size: 16px;
    font-weight: 300;
    line-height: 42px;
    border: none;
    padding: 10px 20px 10px 57px;
    width: 100%;
    height: auto;
    font-size: 18px;
    line-height: 42px
}

@media (min-width: 768px) {
    .steps-section .input-control {
        padding:10px 20px 10px 57px;
        font-size: 18px;
        line-height: 42px
    }
}

.steps-section .input-control::placeholder {
    color: #707070
}

.steps-section .input-control.input-error {
    box-shadow: 0 0px 4px 2px rgba(255, 0, 0, 0.9)
}

.steps-section .step-bottom {
    position: fixed;
    z-index: 1;
    left: 0;
    bottom: 0px;
    width: 100%;
    padding: 3px 0px 9px;
    height: 94px
}

@media (min-width: 768px) {
    .steps-section .step-bottom {
        background-color:#fff;
        box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
    }
}

@media (min-width: 1360px) {
    .steps-section .step-bottom {
        bottom:0
    }
}

.steps-section .step-bottom.custom {
    padding: 19px 0 21px;
    height: auto
}

.steps-section .step-bottom.custom .next-step {
    position: static
}

.steps-section .step-bottom .next-step {
    position: relative;
    top: -12px
}

.steps-section .form-row {
    width: 100%;
    max-width: 600px
}

@media (min-width: 768px) {
    .steps-section .custom-control {
        display:contents
    }
}

.steps-section .custom-control .custom-control-label {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    margin-left: 20px
}

.steps-section .custom-control .custom-control-label::before {
    border: 2px solid #ff6c4d;
    width: 28px;
    height: 28px;
    left: -2.5rem;
    top: -5px
}

.steps-section .custom-control .custom-control-label::after {
    top: 1px;
    left: -34px
}

.steps-section .custom-control .custom-control-input:checked~.custom-control-label::before {
    background-color: #ff6c4d
}

.steps-section .custom-control .custom-control-input:checked~.custom-control-label::after {
    background-image: url('/assets/images/checkin.svg') !important;
    background-size: 16px
}

.steps-section .card-text-descrip {
    max-width: 650px;
    margin: 0 auto 60px;
    padding: 0 15px
}

.steps-section .card-text-descrip p {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 25px;
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .card-text-descrip p {
        font-size:20px
    }
}

.steps-section .card-title {
    padding: 0 15px
}

.steps-section .card-title p {
    font-size: 19px;
    line-height: 20px;
    margin-bottom: 35px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .card-title p {
        font-size:20px
    }
}

.steps-section .form-group.next-step {
    width: 100%;
    max-width: 404px;
    margin: 0 auto 40px
}

.steps-section .jcf-number {
    position: relative;
    margin-bottom: 50px
}

.steps-section .jcf-number .jcf-real-element {
    width: 80px;
    height: 44px;
    border-radius: 43px;
    border: 2px solid #d5d5d5;
    text-align: center;
    -moz-appearance: textfield !important;
    text-align: center;
    padding: 0
}

.steps-section .jcf-number .jcf-btn-inc,.steps-section .jcf-number .jcf-btn-dec {
    position: absolute;
    top: 68%;
    transform: translateY(-50%);
    width: 34px;
    height: 35px;
    color: #808080;
    border-radius: 50%;
    border: 2px solid #707070;
    background-color: #fff;
    font-family: 'Centra No1';
    font-size: 27px;
    font-weight: 300;
    line-height: 1px;
    display: flex;
    align-items: center;
    justify-content: center
}

.steps-section .jcf-number .jcf-btn-inc {
    right: -45px
}

.steps-section .jcf-number .jcf-btn-dec {
    left: -45px
}

.steps-section .jcf-number .jcf-btn-dec:before {
    content: '';
    background-image: url('/assets/images/minus.svg');
    border: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
    width: 12px;
    height: 15px;
    display: block;
    background-size: cover;
    background-repeat: no-repeat
}

.steps-section .jcf-number .jcf-btn-inc:before {
    content: '';
    background-image: url('/assets/images/plus.svg');
    border: none;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
    width: 12px;
    height: 15px;
    display: block;
    background-size: cover;
    background-repeat: no-repeat
}

.steps-section .jcf-focus,.steps-section .jcf-focus * {
    border-color: #d5d5d5 !important
}

.steps-section .datepicker-popup {
    margin-bottom: 70px
}

@media (min-width: 768px) {
    .steps-section .datepicker-popup {
        margin-bottom:114px
    }
}

.steps-section .datepicker-popup .input-control {
    margin: 0 auto
}

@media (min-width: 768px) {
}

.steps-section .datepicker-popup.datepicker-active .wrapp-datepiker-drop {
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    position: fixed;
    z-index: 9999;
    display: block;
    border-radius: 0
}

@media (min-width: 768px) {
    .steps-section .datepicker-popup.datepicker-active .wrapp-datepiker-drop {
        left:50%;
        transform: translateX(-50%);
        top: 89%;
        position: absolute;
        border-radius: 7px
    }
}

.steps-section .data-title {
    text-decoration: none;
    font-size: 19px;
    line-height: 20px;
    font-family: 'Centra No1';
    font-weight: bold;
    margin-bottom: 40px;
    position: relative;
    padding: 0 15px
}

@media (min-width: 768px) {
    .steps-section .data-title {
        font-size:20px
    }
}

.steps-section .data-title:hover {
    color: #808080;
    opacity: 0.6
}

.steps-section .data-title:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .wrapp-datepiker-drop {
    height: 100%;
    position: relative;
    width: 100%;
    display: none
}

@media (min-width: 768px) {
    .steps-section .wrapp-datepiker-drop {
        width:auto
    }
}

.steps-section .datepicker-drop {
    box-shadow: 0 2px 6px rgba(149, 149, 149, 0.36);
    background-color: #fff;
    border-radius: 0;
    width: 100%;
    padding: 10px;
    height: 100%
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop {
        padding:18px 18px 0;
        border-radius: 7px;
        min-width: 355px;
        top: 15px;
        position: relative;
        margin-bottom: 10px;
        height: auto
    }
}

.steps-section .datepicker-drop::before {
    content: '';
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 15px solid #fff;
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translate(-50%)
}

.steps-section .datepicker-drop:after {
    content: '';
    background-image: url('/assets/images/bg-orange-round.svg');
    top: 0;
    left: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    position: absolute;
    background-size: cover;
    width: 100%;
    height: 150px
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop:after {
        content:none
    }
}

.steps-section .datepicker-drop .data-time-text {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 5;
    margin-top: 25px;
    font-size: 25px;
    font-weight: 300;
    font-family: 'Centra No1';
    font-weight: bold;
    color: #fff;
    font-weight: 700;
    text-align: center
}

.steps-section .datepicker-drop .data-time-text:after {
    content: none
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .data-time-text {
        display:none
    }
}

.steps-section .datepicker-drop .hasDatepicker {
    margin-bottom: 25px
}

@media (max-width: 767px) {
    .steps-section .datepicker-drop .hasDatepicker {
        box-shadow:0 5px 10px #bad0f1;
        border-radius: 20px;
        background-color: #fff;
        z-index: 8;
        position: relative;
        top: -12px;
        padding: 0 5px 0;
        height: 233px;
        margin-bottom: 50px
    }
}

@media (max-width: 767px) {
    .steps-section .datepicker-drop .hasDatepicker .ui-datepicker {
        box-shadow:0 5px 10px #bad0f1;
        border-radius: 20px;
        background-color: #fff;
        position: relative;
        top: -12px;
        padding-bottom: 7px
    }
}

.steps-section .datepicker-drop .ui-datepicker-header {
    display: flex;
    justify-content: space-between;
    padding: 15px 5px 25px;
    position: relative
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-header {
        padding:0 0 30px
    }
}

.steps-section .datepicker-drop .ui-datepicker-title {
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-title {
        top:0px
    }
}

.steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
    opacity: 0.32;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ff6c4d
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
        font-size: 14px
    }
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop thead th {
    padding: 15px 0 20px
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .steps-section .datepicker-drop .ui-datepicker-next {
        position:absolute;
        right: -10px
    }
}

.steps-section .datepicker-drop .ui-datepicker-prev-hover span,.steps-section .datepicker-drop .ui-datepicker-next-hover span {
    color: #ff6c4d;
    opacity: 1
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-prev-hover span,.steps-section .datepicker-drop .ui-datepicker-next-hover span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop .ui-datepicker-title {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}

.steps-section .datepicker-drop .ui-datepicker-title span {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 25px;
    font-weight: 700;
    text-transform: uppercase
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-title span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop .ui-datepicker-title span:last-child {
    margin-top: -20px
}

.steps-section .datepicker-drop .ui-datepicker-calendar {
    width: 100%
}

.steps-section .datepicker-drop .ui-state-default {
    color: #b2b2b2;
    font-family: 'Centra No1';
    font-size: 17px;
    font-weight: 300;
    display: block;
    padding: 11px;
    text-decoration: none;
    z-index: 22
}

.steps-section .datepicker-drop .ui-state-active {
    position: relative;
    color: #fff
}

.steps-section .datepicker-drop .ui-state-active:after {
    content: '';
    border-radius: 50%;
    color: #fff;
    flex-shrink: 0;
    width: 35px;
    height: 35px;
    display: block;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 0;
    z-index: -1;
    background-color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-state-active:after {
        background-color:#808080
    }
}

.steps-section .datepicker-drop td,.steps-section .datepicker-drop th {
    text-align: center
}

.steps-section .datepicker-drop th span {
    color: #000
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop th span {
        color:#000
    }
}

.steps-section .datepicker-drop .jcf-range-display-wrapper {
    height: 8px;
    display: flex
}

.steps-section .datepicker-drop .jcf-range-display-wrapper .jcf-range-display {
    background-color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .jcf-range-display-wrapper .jcf-range-display {
        background-color:#808080
    }
}

.steps-section .datepicker-drop .text-value {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300
}

.steps-section .datepicker-drop .range-value {
    position: absolute;
    right: 15px;
    color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .range-value {
        color:#808080
    }
}

.steps-section .datepicker-drop .range-value span {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .range-value span {
        color:#808080
    }
}

.steps-section .datepicker-drop .jcf-range {
    margin: 0px;
    width: 100%;
    padding-right: 45px
}

.steps-section .datepicker-drop .jcf-range .jcf-range-wrapper {
    height: 8px
}

.steps-section .datepicker-drop .jcf-range .jcf-range-handle {
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.16);
    border: 3px solid #fff;
    background-color: #808080;
    top: -11px;
    width: 21px;
    height: 21px;
    margin: -3px 2px 0
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .jcf-range .jcf-range-handle {
        background-color:#808080
    }
}

.steps-section .datepicker-drop .jcf-range .jcf-focus .jcf-range-handle {
    border-color: #ff6c4d !important
}

.steps-section .datepicker-drop .jcf-focus,.steps-section .datepicker-drop .jcf-focus * {
    border-color: #ff6c4d !important
}

.steps-section .datepicker-drop .btn-apply {
    border: none;
    background-color: #ff6c4d;
    margin: 30px auto 0;
    color: #fff;
    font-family: 'Centra No1';
    border-radius: 43px;
    font-size: 14px;
    font-weight: 300;
    line-height: 24px;
    text-transform: uppercase;
    width: 100%;
    padding: 8px;
    border: 1px solid transparent
}

.steps-section .datepicker-drop .btn-apply:hover {
    background-color: transparent;
    color: #ff6c4d;
    border: 1px solid #ff6c4d
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .btn-apply {
        width:auto;
        font-size: 22px;
        background-color: transparent;
        color: #ff6c4d;
        border-radius: 0
    }
}

.steps-section .options-group .col-item {
    width: 100%
}

.steps-section .options-group .col-item:first-child {
    width: 20%
}

.steps-section .options-group .wrapp-option-item {
    border: 2px solid #d8d8d8;
    padding: 16px;
    border-radius: 10px;
    min-height: 355px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group.custom .option-item:nth-child(2n) .card-img img {
        zoom:0.6}
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group.custom .option-item .card-img img {
        zoom:1}
}

.steps-section .options-group .card-img {
    width: 52px
}

@media (min-width: 768px) {
    .steps-section .options-group .card-img {
        margin-top:45px
    }
}

.steps-section .options-group .card-img img {
    width: 52px;
    -webkit-filter: grayscale(1);
    filter: grayscale(1)
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group .card-img img {
        zoom:0.6;width: auto;
        height: auto
    }
}

.steps-section .options-group .title-option {
    margin-bottom: 15px
}

.steps-section .options-group .title-option strong {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 18px;
    margin-right: 15px
}

@media (min-width: 768px) {
    .steps-section .options-group .title-option strong {
        font-size:21px;
        font-weight: 700;
        line-height: 20px
    }
}

.steps-section .options-group .card-descrip {
    width: 100%
}

.steps-section .options-group .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 16px;
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .options-group .card-descrip p {
        font-size:17px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .options-group .title-count p {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 20px
}

.steps-section .options-group .jcf-number {
    margin-bottom: 0
}

.steps-section .options-group .jcf-number .jcf-real-element::-webkit-outer-spin-button,.steps-section .options-group .jcf-number .jcf-real-element::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: textfield !important;
    margin: 0;
}

.steps-section .options-group .jcf-number input[type='number'] {
    -moz-appearance: textfield !important
}

.steps-section .options-group .wrapp-cheked {
    border-radius: 19px;
    background-color: #b2b2b2;
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase;
    padding: 12px 18px 6px;
    min-width: 90px;
    cursor: pointer
}

.steps-section .options-group .wrapp-cheked small {
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase
}

.steps-section .options-group .wrapp-cheked input {
    position: absolute;
    left: -99999px
}

.steps-section .jcf-select {
    width: 100%;
    height: auto;
    border-radius: 50px;
    border: none;
    padding: 17px 31px;
    font-size: 18px;
    line-height: 27px
}

.steps-section .jcf-select .jcf-select-text {
    color: black;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 21px
}

.steps-section .jcf-select .jcf-select-opener {
    background-image: url(/assets/images/icon-next-gray.svg);
    position: absolute;
    text-align: center;
    width: 50px;
    bottom: 0;
    right: 0;
    top: 8px;
    height: 18px;
    transform: rotate(90deg);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    line-height: 30px;
    margin-top: 9px
}

.steps-section .wrapp-selected {
    border-radius: 10px
}

.steps-section .option-selected .wrapp-selected {
    border: 2px solid #ff6c4d;
    padding-bottom: 16px
}

.steps-section .option-selected .wrapp-cheked {
    background-color: #ff6c4d
}

.steps-section .option-selected .wrapp-option-item {
    border: 1px solid transparent;
    padding-bottom: 0
}

.steps-section .option-selected .count-wrapper {
    display: flex
}

.steps-section .option-selected .count-wrapper select {
    width: 100%;
    margin: 0 auto
}

.steps-section .option-selected .card-img img {
    -webkit-filter: grayscale(0);
    filter: grayscale(0)
}

.steps-section .option-selected .title-option strong {
    color: #ff6c4d
}

.steps-section .count-wrapper {
    display: none
}

.steps-section .wrapp-btns {
    margin-top: -60px;
    position: relative;
    border-bottom: 1px solid #ff6c4d;
    display: flex;
    cursor: pointer
}

@media (min-width: 768px) {
    .steps-section .wrapp-btns {
        display:none
    }
}

.steps-section .wrapp-btns:before {
    content: '';
    background-image: linear-gradient(to top, #fff 0%, rgba(255, 255, 255, 0) 100%);
    width: 100%;
    height: 50px;
    display: block
}

.steps-section .wrapp-btns p {
    margin-top: 20px;
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px
}

.steps-section .wrapp-btns p img {
    width: 9px;
    margin-left: 15px;
    transform: rotate(90deg)
}

.steps-section .price {
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 700;
    line-height: 22px;
    font-size: 18px;
    position: fixed;
    top: 20px;
    transform: translateX(-50%);
    width: 60vw;
    left: 60%
}

.steps-section .price span {
    font-size: 23px
}

@media (min-width: 768px) {
    .steps-section .price {
        left:50%;
        width: auto;
        position: static;
        font-size: 34px;
        font-weight: 700;
        letter-spacing: -1.52px;
        line-height: 30px;
        transform: translateX(0)
    }

    .steps-section .price span {
        font-size: 30px
    }
}

.steps-section .wrapp-item {
    margin-bottom: 50px
}

.steps-section .wrapp-item.popup-active .card-item {
    display: flex
}

.steps-section .wrapp-item.popup-active .card-item:nth-child(-n+6) {
    display: flex
}

.steps-section .wrapp-item .card-item {
    display: flex
}

@media (max-width: 767px) {
    .steps-section .wrapp-item .card-item {
        display:none
    }
}

@media (max-width: 767px) {
    .steps-section .wrapp-item .card-item:nth-child(-n+4) {
        display:flex
    }
}

.steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
    width: 50%
}

@media (min-width: 576px) {
    .steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
        width:auto
    }
}

@media screen and (min-width: 576px) and (-ms-high-contrast:active),(min-width: 576px) and (-ms-high-contrast:none) {
    .steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
        width:120px
    }
}

.steps-section .wrapp-item .card-img img {
    width: 63px;
    height: 67px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .wrapp-item .card-img img {
        zoom:0.6;width: auto;
        height: auto;
        margin-left: 28px
    }
}

.steps-section .wrapp-item .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 16px
}

@media (min-width: 768px) {
    .steps-section .wrapp-item .card-text p {
        font-size:18px;
        color: #808080
    }
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #fff;
    background-color: #ffad9f;
    border-color: #ffad9f
}

.wrapp-contact-popup {
    position: fixed;
    right: 0;
    bottom: 0;
    transform: translateY(0);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    background-color: #ff6c4d;
    flex-direction: row;
    width: 100%;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 11px
}

@media (min-width: 800px) {
    .wrapp-contact-popup {
        flex-direction:column;
        right: 0;
        top: 50%;
        bottom: inherit;
        height: auto;
        width: auto;
        background-color: #fff;
        padding: 0 31px 15px;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        transform: translateY(-50%)
    }
}

.wrapp-contact-popup .card-img {
    width: 80px;
    height: 80px;
    padding: 2px;
    border-radius: 50%;
    background-color: #fff;
    margin-top: -32px;
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.16)
}

@media (max-width: 800px) {
    .wrapp-contact-popup .card-img {
        width:50px;
        height: 50px;
        margin-top: 0px
    }
}

.wrapp-contact-popup .card-img img {
    width: 100%
}

.wrapp-contact-popup .card-title {
    margin-left: 10px;
    align-items: flex-start;
    justify-content: flex-start;
    margin-bottom: 0
}

@media (min-width: 800px) {
    .wrapp-contact-popup .card-title {
        margin-right:0;
        align-items: center;
        justify-content: center
    }
}

.wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
    color: #fff;
    font-family: 'Centra No1';
    margin: 0;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
        font-size:14px;
        line-height: 17px
    }
}

.wrapp-contact-popup strong:hover,.wrapp-contact-popup a:hover,.wrapp-contact-popup p:hover {
    text-decoration: none
}

@media (min-width: 800px) {
    .wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
        color:#808080
    }
}

.wrapp-contact-popup strong {
    font-family: 'Centra No1';
    font-weight: bold
}

.wrapp-contact-popup strong a {
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 1360px) {
}

@media (min-width: 800px) {
    .wrapp-contact-popup .card-title {
        margin-bottom:15px
    }
}

.wrapp-contact-popup .list-contact-popup {
    display: none
}

@media (min-width: 800px) {
    .wrapp-contact-popup .list-contact-popup {
        display:block
    }
}

.wrapp-contact-popup strong a {
    display: inline-block
}

.wrapp-contact-popup strong a:hover {
    text-decoration: underline
}

@media (min-width: 800px) {
    .wrapp-contact-popup strong a {
        display:none
    }
}

.promotion-wrapper {
    position: relative
}

@media (max-width: 767px) {
    .promotion-wrapper {
        position:fixed;
        width: 100vw;
        padding: 10px;
        padding-bottom: 0;
        background: white;
        bottom: 80px
    }
}

.step-modal {
    border: 1px solid #707070;
    background-color: rgba(7, 7, 7, 0.87);
    bottom: 0;
    right: 0
}

#success-modal .modal-content {
    box-shadow: 0 5px 29px rgba(0, 0, 0, 0.4);
    border-radius: 17px;
    background-color: #ff6c4d;
    padding: 49px 0px;
    height: 100%
}

@media (min-width: 768px) {
    #success-modal .modal-content {
        padding:70px 0px
    }
}

#success-modal .modal-header,#success-modal .modal-body,#success-modal .modal-footer {
    border: none;
    padding: 0 30px
}

@media (min-width: 768px) {
    #success-modal .modal-header,#success-modal .modal-body,#success-modal .modal-footer {
        padding:0 65px
    }
}

#success-modal .modal-header {
    margin-bottom: 12px
}

#success-modal .modal-body {
    margin-bottom: 40px
}

#success-modal strong {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    margin-bottom: 34px
}

#success-modal p {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px
}

@media (min-width: 768px) {
    #success-modal p {
        font-size:18px
    }
}

#error-modal .modal-content {
    box-shadow: 0 5px 29px rgba(0, 0, 0, 0.4);
    border-radius: 17px;
    background-color: #3975fc;
    padding: 70px 0px;
    height: 100%
}

#error-modal .modal-header,#error-modal .modal-body,#error-modal .modal-footer,#error-modal .card-img {
    border: none;
    padding: 0 65px
}

#error-modal .modal-body {
    margin-bottom: 40px
}

#error-modal .card-img {
    margin-bottom: 12px
}

#error-modal strong,#error-modal h5 {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    margin-bottom: 34px
}

#error-modal p {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 21px
}

#error-modal.hide-modal-body [data-error] {
    display: block
}

#error-modal.hide-modal-body [data-error-default] {
    display: none
}

#error-modal.hide-modal-body .modal-body {
    display: none
}

#error-modal [data-error] {
    display: none
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width:806px;
        margin: 10.75rem auto
    }
}

.wrapp-booking-pay {
    margin-bottom: 100px
}

.wrapp-booking-pay .booking-pay-tabset {
    margin-bottom: 50px
}

.wrapp-booking-pay .booking-pay-tabset .col-item {
    width: 100%
}

.wrapp-booking-pay .booking-pay-tabset .col-item:first-child {
    width: 20%
}

.wrapp-booking-pay .booking-pay-tabset input {
    visibility: hidden
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item {
    border: 1px solid #ff6c4d
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item .card-img img {
    -webkit-filter: grayscale(0);
    filter: grayscale(0)
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item .title-option strong {
    color: #ff6c4d
}

.wrapp-booking-pay .booking-pay-tabset .wrapp-option-item {
    border: 1px solid #d8d8d8;
    padding: 8px;
    text-decoration: none;
    height: 89px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .wrapp-option-item {
        padding:16px;
        height: 137px;
        margin: 30px 0;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px
    }
}

.wrapp-booking-pay .booking-pay-tabset .card-img {
    width: 68px
}

.wrapp-booking-pay .booking-pay-tabset .card-img img {
    width: 55px;
    -webkit-filter: grayscale(1);
    filter: grayscale(1)
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .card-img img {
        width:68px
    }
}

.wrapp-booking-pay .booking-pay-tabset .title-option {
    margin-bottom: 15px
}

.wrapp-booking-pay .booking-pay-tabset .title-option strong {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 18px;
    margin-right: 15px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .title-option strong {
        font-size:21px;
        font-weight: 700;
        line-height: 20px
    }
}

.wrapp-booking-pay .booking-pay-tabset .card-descrip {
    width: 100%
}

.wrapp-booking-pay .booking-pay-tabset .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 16px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .card-descrip p {
        font-size:17px;
        font-weight: 300;
        line-height: 20px
    }
}

.wrapp-booking-pay .tab-content .tab-item-content {
    display: none;
    width: 100%;
    margin-top: 60px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .tab-content .tab-item-content {
        width:50%
    }
}

.wrapp-booking-pay .tab-content .tab-item-content.radio-tab-active {
    display: block
}

.wrapp-booking-pay .tab-content .lock-title .card-icon {
    margin-bottom: 15px
}

.wrapp-booking-pay .tab-content .lock-title p {
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 15px
}

@media (max-width: 768px) {
    .modal-dialog {
        height:100%;
        margin: 0
    }
}

label {
    font-weight: bold
}

.form-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #808080;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    border: none;
    padding: 18px 45px;
    width: 200%;
    height: auto
}

span.step-devis {
    background: #ff6c4d;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 0.8em;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    line-height: 1.6em;
    margin-right: 15px;
    text-align: center;
    width: 1.6em
}

.wrapp-intro-case-study {
    position: relative;
    min-height: 600px;
    height: 100vh;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
}

.wrapp-intro-case-study:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: none;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 0;
    height: 282px
}

@media (min-width: 1024px) {
    .wrapp-intro-case-study:before {
        height:320px
    }
}

.wrapp-intro-case-study .card-title {
    position: relative;
    top: 75px
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .card-title {
        top:100px
    }
}

.wrapp-intro-case-study .card-title .h1 {
    color: white;
    font-size: 29px;
    line-height: 34px
}

@media (min-width: 1024px) {
    .wrapp-intro-case-study .card-title .h1 {
        font-size:45px;
        line-height: 1.2;
        margin-top: 30px
    }
}

.wrapp-intro-case-study .bg-strech {
    background-repeat: no-repeat;
    background-position: center 9px;
    background-size: cover;
    top: 0;
    height: 100vh;
    left: 0;
    width: 100%;
    z-index: -1;
    min-height: 600px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .bg-strech {
        min-height:100%;
        background-position: bottom;
        position: absolute
    }
}

.wrapp-intro-case-study .bg-strech:after {
    content: '';
    width: 100%;
    height: 100%;
    background-image: url('/assets/images/op-layer.png');
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1
}

.wrapp-intro-case-study .bg-strech .wrapp-link {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%);
    width: 100%
}

.wrapp-intro-case-study .bg-strech .wrapp-link img {
    max-width: 177px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .bg-strech .wrapp-link img {
        max-width:inherit
    }
}

.wrapp-intro-case-study .bg-strech .list-hashtag {
    position: absolute;
    bottom: 20px;
    width: 100%;
    flex-wrap: wrap;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 15px
}

.wrapp-intro-case-study .bg-strech .list-hashtag a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    letter-spacing: 0.7px;
    line-height: 18px
}

.section-case-study-content {
    margin-top: -12px
}

@media (min-width: 768px) {
    .section-case-study-content {
        margin-top:0px
    }
}

.section-case-study-content .wrapp-line {
    padding: 66px 0 80px;
    position: relative
}

.section-case-study-content .wrapp-line:last-child {
    padding: 80px 0 0
}

.section-case-study-content .card-title {
    position: relative
}

.section-case-study-content .card-title h1 {
    font-size: 38px
}

@media (min-width: 1024px) {
    .section-case-study-content .card-title h1 {
        font-size:45px
    }
}

.section-case-study-content .card-title:after {
    content: '';
    background-image: url('/assets/images/light-blue-line.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .section-case-study-content .card-title:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.section-case-study-content .card-descrip {
    margin-bottom: 30px
}

.section-case-study-content .card-descrip p {
    font-family: 'Centra No1';
    font-weight: 300;
    font-size: 14px;
    line-height: 21px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-case-study-content .card-descrip p {
        font-size:18px;
        line-height: 28px
    }
}

.section-case-study-content .arrow {
    position: absolute;
    left: 100px;
    bottom: -167px;
    z-index: 25;
    display: none
}

@media (min-width: 768px) {
    .section-case-study-content .arrow {
        display:block
    }
}

.section-case-study-content .wrapp-images {
    padding: 0 15px
}

.section-case-study-content .wrapp-images img {
    width: 100%;
    padding: 20px
}

.section-case-study-result {
    padding: 60px 0 180px;
    background-repeat: no-repeat;
    background-position: center 0;
    z-index: 0;
    width: 100%;
    background-image: url('/assets/images/double-layer-blues.svg');
    display: flex;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0;
    margin-top: -1px
}

@media (min-width: 1024px) {
    .section-case-study-result {
        min-height:1245px;
        background-size: cover
    }
}

.section-case-study-result .container {
    position: relative;
    z-index: 5
}

.section-case-study-result .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .section-case-study-result .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .section-case-study-result .bg-strech {
        min-height:800px
    }
}

.section-case-study-result .slide-results {
    flex-direction: column
}

@media (min-width: 1023px) {
    .section-case-study-result .slide-results {
        justify-content:space-between;
        flex-direction: row
    }
}

.section-case-study-result .card-title {
    text-align: center;
    position: relative
}

.section-case-study-result .card-title h1 {
    font-size: 38px
}

@media (min-width: 1024px) {
    .section-case-study-result .card-title h1 {
        font-size:63px
    }
}

.section-case-study-result .card-title:after {
    content: '';
    width: 60px;
    height: 20px;
    background-image: url('/assets/images/light-blue-line.svg');
    display: block;
    background-repeat: no-repeat;
    position: absolute;
    background-size: 60px;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 1335px) {
    .section-case-study-result .card-title:after {
        width:120px;
        height: 40px;
        background-size: 120px;
        bottom: 0px
    }
}

.section-case-study-result .card-title .h1,.section-case-study-result .card-title h1 {
    position: relative
}

.section-case-study-result .card-title .card-sub-title {
    top: 0;
    height: 100px;
    position: relative;
    display: none
}

@media (min-width: 1024px) {
    .section-case-study-result .card-title .card-sub-title {
        display:flex
    }
}

.section-case-study-result .card-title .card-sub-title:after {
    content: '';
    background-image: url('/assets/images/smile-orange-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 174px;
    height: 51px;
    position: absolute;
    top: 45px;
    left: 7px;
    background-size: 174px
}

.section-case-study-result .card-title .card-sub-title strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 57px;
    font-weight: 900;
    line-height: 75px;
    position: relative;
    z-index: -1;
    transform: rotate(10deg)
}

@media (min-width: 768px) {
    .section-case-study-result .card-title .card-sub-title strong {
        font-size:73px
    }
}

.section-case-study-result .card-title .card-sub-title p {
    color: #ffad9f;
    font-size: 104px;
    font-weight: 400;
    font-family: 'Lucky Fellas';
    z-index: 1;
    display: block;
    transform: rotate(10deg);
    position: relative;
    top: -47px
}

@media (min-width: 768px) {
    .section-case-study-result .card-title .card-sub-title p {
        font-size:95px
    }
}

.section-case-study-result .wrapp-bottom-results {
    padding-top: 35px;
    padding-bottom: 50px;
    position: relative;
    top: 159px
}

@media (min-width: 430px) {
    .section-case-study-result .wrapp-bottom-results {
        padding-top:70px;
        padding-bottom: 80px;
        position: relative;
        top: 120px
    }
}

@media (min-width: 1024px) {
    .section-case-study-result .wrapp-bottom-results {
        padding-top:50px;
        padding-bottom: 80px;
        position: relative;
        top: 120px
    }
}

.section-case-study-result .wrapp-bottom-results .card-title {
    margin-bottom: 0
}

@media (min-width: 430px) {
    .section-case-study-result .wrapp-bottom-results .card-title {
        margin-bottom:20px
    }
}

.section-case-study-result .wrapp-bottom-results .card-title h1 {
    line-height: 28px
}

.section-case-study-result .card-descrip {
    max-width: 840px;
    margin: -90px auto 20px;
    margin-bottom: 50px;
    position: relative;
    top: 35px
}

@media (min-width: 1024px) {
    .section-case-study-result .card-descrip {
        margin-bottom:100px;
        margin: -130px auto 20px
    }
}

.section-case-study-result .card-descrip p {
    color: #707070;
    font-size: 14px;
    line-height: 21px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-case-study-result .card-descrip p {
        font-size:18px;
        line-height: 28px
    }
}

.section-case-study-result .card-descrip p a {
    color: #707070
}

.section-case-study-result .sub-title {
    position: relative;
    top: 25px;
    padding-bottom: 40px
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title {
        top:10px
    }
}

.section-case-study-result .sub-title strong {
    font-size: 69px;
    font-weight: 900;
    line-height: 40px;
    text-transform: uppercase;
    font-family: 'Centra No1';
    margin: 0;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title strong {
        font-size:85px;
        font-weight: 900;
        line-height: 175px
    }
}

.section-case-study-result .sub-title p {
    font-family: 'Lucky Fellas';
    font-size: 61px;
    font-weight: 400;
    position: relative;
    top: -19px;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title p {
        font-size:85px;
        font-weight: 400;
        top: -90px
    }
}

.section-case-study-result blockquote {
    max-width: 768px;
    margin: 0 auto;
    position: relative
}

.section-case-study-result blockquote:before {
    content: '';
    background-image: url('/assets/images/qcs.svg');
    width: 40px;
    height: 36px;
    display: block;
    position: absolute;
    left: 0px;
    top: -42px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote:before {
        left:-25px;
        top: -25px
    }
}

.section-case-study-result blockquote:after {
    content: '';
    background-image: url('/assets/images/qcs-2.svg');
    width: 40px;
    height: 36px;
    display: block;
    position: absolute;
    right: 0px;
    bottom: -40px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote:after {
        right:-25px;
        bottom: -25px
    }
}

.section-case-study-result blockquote p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 900;
    letter-spacing: 1.2px;
    line-height: 18px;
    padding: 0 30px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote p {
        font-size:25px;
        line-height: 33px
    }
}

.section-images-pro {
    margin-top: -141px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-images-pro {
        margin-top:-231px
    }
}

.wrapp-intro-la-jabox:before {
    content: '';
    width: 100%;
    height: 78px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox:before {
        height:300px
    }
}

.wrapp-intro-la-jabox .card-title {
    margin-top: 110px
}

.wrapp-intro-la-jabox .card-title .h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox .card-title .h1 {
        font-size:57px;
        line-height: 85px
    }
}

.wrapp-intro-la-jabox .card-title .h1 img {
    width: 138px
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox .card-title .h1 img {
        width:auto
    }
}

.section-la-jabox-content {
    padding: 140px 0 50px
}

@media (min-width: 768px) {
    .section-la-jabox-content {
        padding:300px 0 150px
    }
}

.section-la-jabox-content .card-title {
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title {
        margin-bottom:128px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .card-title {
        margin-bottom:0
    }
}

.section-la-jabox-content .card-title h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title h1 {
        font-size:57px;
        line-height: 85px
    }
}

.section-la-jabox-content .card-title .line {
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%)
}

.section-la-jabox-content .row {
    margin-bottom: 25px
}

@media (min-width: 768px) {
}

.section-la-jabox-content .col-12 {
    margin-bottom: 50px
}

.section-la-jabox-content .col-12:last-child {
    box-shadow: 0 -13px 18px rgba(0, 0, 0, 0.16);
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-12:last-child {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .col-item {
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-item {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .card-img img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-img img {
        opacity:1
    }
}

.section-la-jabox-content .decorize1 {
    top: -205px;
    left: 52%;
    transform: translateX(-50%)
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize1 {
        top:-205px;
        left: 86px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .decorize1 img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize1 img {
        opacity:1
    }
}

.section-la-jabox-content .decorize2 {
    background-image: url('/assets/images/min-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 20px;
    top: -150px;
    left: -10px;
    max-width: 250px;
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 {
        top:30px;
        padding: 27px 20px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize2 {
        right:-80px
    }
}

.section-la-jabox-content .decorize2 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize2 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize2 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize3 {
    background-image: url('/assets/images/min-left-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 20px;
    top: -20px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 {
        top:95px;
        padding: 27px 20px;
        left: -10px;
        right: inherit
    }
}

@media (min-width: 1370px) {
    .section-la-jabox-content .decorize3 {
        left:-40px
    }
}

.section-la-jabox-content .decorize3 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize3 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize3 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 {
    background-image: url('/assets/images/big-right-orange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 100px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 {
        top:230px;
        right: -5px;
        left: inherit
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize4 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize4 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize5 {
    background-image: url('/assets/images/big-left-prange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 290px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 {
        top:280px;
        left: -5px;
        right: inherit
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize5 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize5 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize5 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize6 {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 470px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 {
        top:430px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize6 {
        right:-50px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize6 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize6 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize6 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 p {
        font-size:17px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .col-item-wrapp {
        margin-top:100px
    }
}

.section-la-jabox-content .wrapp-text {
    margin-left: 0px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .wrapp-text {
        margin-left:130px;
        margin-top: 33px
    }
}

.section-la-jabox-content .wrapp-text .title-text {
    margin-bottom: 50px;
    padding: 0 15px
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text {
        padding:0
    }
}

.section-la-jabox-content .wrapp-text .title-text strong {
    font-size: 30px;
    font-weight: 700;
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text strong {
        font-size:34px
    }
}

.section-la-jabox-content .wrapp-text ul {
    padding: 0;
    margin: 0
}

.section-la-jabox-content .wrapp-text ul li {
    margin-bottom: 20px;
    padding: 0 15px;
    border-bottom: 1px solid #ececec
}

.section-la-jabox-content .wrapp-text ul li:first-child {
    padding-top: 12px;
    border-top: 1px solid #ececec
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li:first-child {
        border-top:none;
        padding-top: 0
    }
}

.section-la-jabox-content .wrapp-text ul li:last-child {
    margin-bottom: 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li {
        padding:0;
        border-bottom: none
    }
}

.section-la-jabox-content .wrapp-text ul li .title {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px
}

.section-la-jabox-content .wrapp-text ul li .descrip {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.section-la-jabox-content .bottom {
    width: 100%;
    padding: 0px 0 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom {
        padding:150px 0 0
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom {
        padding:0
    }
}

.section-la-jabox-content .bottom .card-img {
    margin-bottom: 35px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .card-img {
        margin-bottom:0
    }
}

.section-la-jabox-content .bottom .card-img img {
    max-width: 226px;
    width: 100%;
    opacity: 1;
    margin-top: 10px
}

.section-la-jabox-content .bottom .decorize1 {
    text-align: center;
    transform: translateX(0);
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 {
        position:absolute;
        transform: translateX(-50%);
        top: -145px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .decorize1 {
        top:-205px;
        left: 42px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .bottom .decorize1 img {
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 img {
        width:auto
    }
}

.section-la-jabox-content .bottom .wrapp-opt {
    z-index: -1
}

.section-la-jabox-content .bottom .decorize {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: -185px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize {
        position:absolute;
        z-index: 22
    }
}

@media (min-width: 1450px) {
    .section-la-jabox-content .bottom .decorize {
        top:-131px;
        right: -82px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor {
    padding: 27px 20px 15px;
    position: relative
}

.section-la-jabox-content .bottom .decorize .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .bottom .decorize .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .bottom .decorize .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .bottom .decorize p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize p {
        font-size:17px
    }
}

.slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent
}

.slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0
}

.slick-list:focus {
    outline: none
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand
}

.slick-slider .slick-track,.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block
}

.slick-track:before,.slick-track:after {
    content: \"\";
    display: table
}

.slick-track:after {
    clear: both
}

.slick-loading .slick-track {
    visibility: hidden
}

.slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none
}

[dir=\"rtl\"] .slick-slide {
    float: right
}

.slick-slide img {
    display: block
}

.slick-slide.slick-loading img {
    display: none
}

.slick-slide.dragging img {
    pointer-events: none
}

.slick-initialized .slick-slide {
    display: block
}

.slick-loading .slick-slide {
    visibility: hidden
}

.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent
}

.slick-arrow.slick-hidden {
    display: none
}

.slide-tab-case {
    width: 100% !important;
    position: relative;
    margin-left: 0px
}

@media (min-width: 1024px) {
}

.slide-tab-case .slick-list {
    width: 100% !important;
    overflow: inherit !important
}

.slide-tab-case .slick-track {
    display: block
}

.slide-tab-case .slide-item {
    max-width: 240px;
    width: 100% !important;
    height: 100%;
    margin: 0 10px
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item {
        margin:0 45px
    }
}

.slide-tab-case .slide-item .box-info {
    max-width: 214px;
    width: 100% !important;
    height: 214px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #ffad9f;
    position: relative;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item .box-info {
        max-width:300px;
        width: 100% !important;
        height: 300px
    }
}

.slide-tab-case .slide-item .box-info:hover {
    transform: scale(1.1)
}

.slide-tab-case .slide-item .card-img {
    background-size: cover;
    background-position: center;
    transition: 0.3s;
    background-repeat: no-repeat;
    border-radius: 30px 30px 0 0
}

.slide-tab-case .slide-item .text-holder {
    position: absolute;
    left: 0;
    bottom: 0;
    background: white;
    width: 100%;
    min-height: 32%;
    border-radius: 0 0 30px 30px
}

.slide-tab-case .slide-item .text-holder p {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 30px
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item .text-holder p {
        font-size:16px;
        line-height: 19px;
        margin: 18px;
        letter-spacing: 1px
    }
}

.section-josepho-content.customize .slide-josepho {
    margin: 0px auto 80px
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho {
        margin:-15px auto 80px
    }
}

.section-josepho-content.customize .slide-josepho .card-text {
    padding: 15px 0
}

.section-josepho-content.customize .slide-josepho .card-text p {
    color: #fff;
    font-family: 'Lucky Fellas';
    font-size: 79px;
    font-weight: 400;
    z-index: 1;
    position: relative
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho .card-text p {
        font-size:118px
    }
}

.section-josepho-content.customize .slide-josepho .card-text strong {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 56px;
    font-weight: 900;
    line-height: 40px;
    transform: rotate(-5deg);
    display: block;
    margin-top: 0px;
    padding-bottom: 15px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho .card-text strong {
        font-size:75px
    }
}

.slide-josepho {
    max-width: 570px;
    margin: 0px auto 80px
}

@media (min-width: 768px) {
    .slide-josepho {
        margin:-60px auto 80px
    }
}

.slide-josepho .slide-item {
    margin: 0 20px
}

.slide-josepho .slick-track {
    text-align: center
}

.slide-josepho .card-text p {
    color: #fff;
    font-family: 'Lucky Fellas';
    font-size: 79px;
    font-weight: 400;
    z-index: 1;
    position: relative
}

@media (min-width: 768px) {
    .slide-josepho .card-text p {
        font-size:136px
    }
}

.slide-josepho .card-text strong {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 56px;
    font-weight: 900;
    line-height: 40px;
    transform: rotate(-5deg);
    display: block;
    margin-top: -20px;
    padding-bottom: 15px;
    z-index: -1
}

@media (min-width: 768px) {
    .slide-josepho .card-text strong {
        font-size:98px
    }
}

.slide-josepho .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.slide-josepho .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.slide-josepho .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow img {
        width:auto
    }
}

.slide-josepho .slick-arrow:hover i {
    opacity: 0.8
}

.slide-josepho .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .slide-josepho .slick-arrow.slick-prev {
        left:-1%
    }
}

.slide-josepho .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .slide-josepho .slick-arrow.slick-next {
        right:-1%
    }
}

.slide-trust {
    width: 100% !important;
    max-width: 500px;
    overflow: hidden;
    margin: 0 auto;
    padding: 0 20px
}

@media (min-width: 440px) {
    .slide-trust {
        max-width:450px;
        padding: 0 30px
    }
}

@media (min-width: 540px) {
    .slide-trust {
        max-width:480px
    }
}

.slide-trust .slick-list {
    width: 100% !important;
    overflow: inherit !important
}

.slide-trust .slick-track {
    display: flex;
    align-items: center
}

.slide-trust .slide-item {
    width: 100px;
    text-align: center;
    margin: 0 5px
}

@media (min-width: 540px) {
    .slide-trust .slide-item {
        width:154px
    }
}

.slide-trust .slide-item .slide-box {
    transform: scale(0.5)
}

.slide-trust .slide-item img {
    width: 100%
}

.slide-trust .slide-item.slick-current .slide-box,.slide-trust .slide-item.tmp-center .slide-box {
    transform: scale(1)
}

.slide-trust .slide-item.slick-current img,.slide-trust .slide-item.tmp-center img {
    width: 100%
}

.slide-trust .slide-item.no-anim .slide-box,.slide-trust .slide-item.no-anim img {
    animation: none
}

.slide-trust .slide-item .box-info {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #ffad9f;
    position: relative
}

.slide-trust .slide-item .text-holder {
    position: absolute;
    left: 30px;
    bottom: 30px;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 50px
}

.slide-trust .slide-item .card-img {
    text-align: center
}

.slide-trust .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.slide-trust .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.slide-trust .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow img {
        width:auto
    }
}

.slide-trust .slick-arrow:hover i {
    opacity: 0.8
}

.slide-trust .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .slide-trust .slick-arrow.slick-prev {
        left:-1%
    }
}

.slide-trust .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .slide-trust .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide {
    max-width: 570px;
    margin: 30px auto 80px
}

.min-slide .slide-item {
    margin: 0 20px
}

.min-slide .slick-track {
    text-align: center
}

.min-slide h2,.min-slide span.h2 {
    margin-bottom: 0;
    color: #ff6c4d;
    position: relative;
    padding: 15px 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .min-slide h2,.min-slide span.h2 {
        font-size:45px
    }
}

.min-slide h2:after,.min-slide span.h2:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .min-slide h2:after,.min-slide span.h2:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.min-slide .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide .slick-arrow img {
        width:auto
    }
}

.min-slide .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide .slick-arrow.slick-prev {
        left:-1%
    }
}

.min-slide .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide2 {
    max-width: 570px;
    margin: 30px auto 40px
}

@media (min-width: 768px) {
    .min-slide2 {
        margin:30px auto 80px
    }
}

.min-slide2 .slide-item {
    margin: 0 20px
}

.min-slide2 .slick-track {
    text-align: center
}

.min-slide2 h2,.min-slide2 span.h2 {
    margin-bottom: 0;
    color: #3975fc;
    position: relative;
    padding: 15px 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .min-slide2 h2,.min-slide2 span.h2 {
        font-size:45px
    }
}

.min-slide2 h2:after,.min-slide2 span.h2:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .min-slide2 h2:after,.min-slide2 span.h2:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.min-slide2 .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide2 .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide2 .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide2 .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow img {
        width:auto
    }
}

.min-slide2 .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide2 .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide2 .slick-arrow.slick-prev {
        left:-1%
    }
}

.min-slide2 .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide2 .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide-blue {
    max-width: 570px;
    margin: 30px auto 30px
}

@media (min-width: 768px) {
    .min-slide-blue {
        margin:30px auto 80px
    }
}

.min-slide-blue .slick-arrow {
    position: absolute;
    top: 20%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide-blue .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide-blue .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide-blue .slick-arrow img {
        width:auto
    }
}

.min-slide-blue .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide-blue .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide-blue .slick-arrow.slick-prev {
        left:28%
    }
}

.min-slide-blue .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide-blue .slick-arrow.slick-next {
        right:30%
    }
}

.min-slide-blue .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center
}

.min-slide-blue .slick-dots li {
    margin: 10px;
    font-size: 0
}

.min-slide-blue .slick-dots li.slick-active button:before {
    content: '';
    background-color: #3975fc;
    opacity: 1
}

.min-slide-blue .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.min-slide-blue .slick-dots button {
    width: 8px;
    height: 8px;
    border: 1px solid #3975fc;
    z-index: 0;
    position: relative;
    background-color: transparent;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

.min-slide-blue .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

.min-slide-blue .slide-item {
    margin: 0 20px
}

.min-slide-blue .card-icon img {
    width: 118px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .min-slide-blue .card-icon img {
        width: auto
    }
}

.min-slide-blue .slick-track {
    text-align: center
}

.min-slide-blue h2 {
    margin-bottom: 0;
    color: #ff6c4d;
    position: relative
}

.min-slide-blue h2:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .min-slide-blue h2:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.min-slide-blue .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide-blue .text-holder p span {
    font-family: 'Centra No1'
}

.big-slide {
    position: relative
}

.big-slide .card-img img {
    width: 100%
}

.big-slide .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
    margin: 0
}

.big-slide .slick-dots li {
    margin: 10px;
    font-size: 0
}

.big-slide .slick-dots li.slick-active button:before {
    content: '';
    background-color: #ff6c4d;
    opacity: 1
}

.big-slide .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.big-slide .slick-dots button {
    width: 8px;
    height: 8px;
    border: 1px solid #ff6c4d;
    z-index: 0;
    position: relative;
    background-color: #fff;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

@media (min-width: 768px) {
    .big-slide .slick-dots button {
        width:17px;
        height: 17px
    }
}

.big-slide .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

@media (min-width: 768px) {
    .big-slide .slick-dots button:before {
        width:17px;
        height: 17px
    }
}

.slide-results {
    margin: 30px auto 30px;
    width: 100% !important;
    max-width: 500px;
    overflow: hidden
}

@media (min-width: 1024px) {
    .slide-results {
        max-width:inherit
    }
}

.slide-results .slick-list {
    width: 100% !important;
    overflow: inherit !important
}

.slide-results .slick-track {
    display: flex;
    align-items: center
}

@media (min-width: 1024px) {
    .slide-results {
        max-width:auto;
        margin: 30px auto 80px
    }
}

.slide-results .slide-item {
    max-width: 100%
}

@media (min-width: 1024px) {
    .slide-results .slide-item {
        max-width:250px
    }
}

.slide-results .card-icon {
    height: 105px
}

.slide-results .card-data strong {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900
}

@media (min-width: 1024px) {
    .slide-results .card-data strong {
        font-size:58px
    }
}

.slide-results .card-title:after {
    content: none
}

.slide-results .card-title p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 200;
    line-height: 31px
}

@media (min-width: 1024px) {
    .slide-results .card-title p {
        font-size:21px
    }
}

.slide-results .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.slide-results .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.slide-results .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .slide-results .slick-arrow img {
        width:auto
    }
}

.slide-results .slick-arrow:hover i {
    opacity: 0.8
}

.slide-results .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .slide-results .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .slide-results .slick-arrow.slick-prev {
        left:-1%
    }
}

.slide-results .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .slide-results .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .slide-results .slick-arrow.slick-next {
        right:-1%
    }
}

.slide-results .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center
}

@media (min-width: 1024px) {
    .slide-results .slick-dots {
        display:none !important
    }
}

.slide-results .slick-dots li {
    margin: 10px;
    font-size: 0
}

.slide-results .slick-dots li.slick-active button:before {
    content: '';
    background-color: #fff;
    opacity: 1
}

.slide-results .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.slide-results .slick-dots button {
    width: 6px;
    height: 6px;
    border: 1px solid #fff;
    z-index: 0;
    position: relative;
    background-color: transparent;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

.slide-results .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

.min-slide-orange {
    max-width: 570px;
    margin: 30px auto 80px
}

.min-slide-orange .slick-arrow {
    position: absolute;
    top: 20%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide-orange .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide-orange .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide-orange .slick-arrow img {
        width:auto
    }
}

.min-slide-orange .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide-orange .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide-orange .slick-arrow.slick-prev {
        left:28%
    }
}

.min-slide-orange .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide-orange .slick-arrow.slick-next {
        right:30%
    }
}

.min-slide-orange .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center
}

.min-slide-orange .slick-dots li {
    margin: 10px;
    font-size: 0
}

.min-slide-orange .slick-dots li.slick-active button:before {
    content: '';
    background-color: #ff6c4d;
    opacity: 1
}

.min-slide-orange .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.min-slide-orange .slick-dots button {
    width: 8px;
    height: 8px;
    border: 1px solid #ff6c4d;
    z-index: 0;
    position: relative;
    background-color: transparent;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

.min-slide-orange .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

.min-slide-orange .slide-item {
    margin: 0 20px
}

.min-slide-orange .card-icon img {
    width: 17%
}

.min-slide-orange .slick-track {
    text-align: center
}

.min-slide-orange h2 {
    margin-bottom: 0;
    color: #ff6c4d;
    position: relative
}

.min-slide-orange h2:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

.min-slide-orange .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide-orange .text-holder p span {
    font-family: 'Centra No1'
}

.wheel-slideshow {
    position: relative;
    height: 100vh;
    height: calc(var(--vh, 1vh) * 100);
    transition: height 0.3s
}

.wheel-slideshow .slideset {
    height: 100%
}

.wheel-slideshow .slide {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%
}

.wheel-slideshow .slide.active {
    z-index: 2
}

.wheel-slideshow .btn-next,.wheel-slideshow .next-section {
    position: absolute;
    z-index: 3;
    bottom: 12px;
    left: 50%
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wheel-slideshow .btn-next,.wheel-slideshow .next-section {
        left: 42%
    }
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wheel-slideshow .btn-next.bounce,.wheel-slideshow .next-section.bounce {
        left: 42%
    }
}

.wheel-slideshow .btn-next svg,.wheel-slideshow .next-section svg {
    width: 12px
}

@media (min-width: 813px) {
    .wheel-slideshow .btn-next svg,.wheel-slideshow .next-section svg {
        width:auto
    }
}

.wheel-slideshow .next-section {
    visibility: hidden
}

.wheel-slideshow .disabled {
    visibility: hidden
}

.wheel-slideshow .disabled+.next-section {
    visibility: visible
}

.wheel-slideshow.not-enough-slides .btn-prev,.wheel-slideshow.not-enough-slides .btn-next {
    visibility: hidden
}

.jcf-scrollable-wrapper {
    box-sizing: content-box;
    position: relative
}

.jcf-scrollbar-vertical {
    position: absolute;
    cursor: default;
    background: #e3e3e3;
    width: 14px;
    bottom: 0;
    right: 0;
    top: 0
}

.jcf-scrollbar-vertical .jcf-scrollbar-dec,.jcf-scrollbar-vertical .jcf-scrollbar-inc {
    background: #bbb;
    height: 14px;
    width: 14px;
    left: 0;
    top: 0
}

.jcf-scrollbar-vertical .jcf-scrollbar-inc {
    top: auto;
    bottom: 0
}

.jcf-scrollbar-vertical .jcf-scrollbar-handle {
    background: #888;
    height: 1px;
    width: 14px
}

.jcf-scrollbar-horizontal {
    position: absolute;
    background: #e3e3e3;
    right: auto;
    top: auto;
    left: 0;
    bottom: 0;
    width: 1px;
    height: 14px
}

.jcf-scrollbar-horizontal .jcf-scrollbar-dec,.jcf-scrollbar-horizontal .jcf-scrollbar-inc {
    display: inline-block;
    vertical-align: top;
    overflow: hidden;
    background: #bbb;
    height: 14px;
    width: 14px
}

.jcf-scrollbar-horizontal .jcf-scrollbar-inc {
    left: auto;
    right: 0
}

.jcf-scrollbar-horizontal .jcf-scrollbar-slider {
    display: inline-block;
    position: relative;
    height: 14px
}

.jcf-scrollbar-horizontal .jcf-scrollbar-handle {
    position: absolute;
    background: #888;
    height: 14px
}

.jcf-scrollbar.jcf-inactive .jcf-scrollbar-handle {
    visibility: hidden
}

.jcf-scrollbar.jcf-inactive .jcf-scrollbar-dec,.jcf-scrollbar.jcf-inactive .jcf-scrollbar-inc {
    background: #e3e3e3
}

.jcf-disabled {
    background: #ddd !important
}

.jcf-focus,.jcf-focus * {
    border-color: #f00 !important
}

.jcf-range {
    display: inline-block;
    min-width: 200px;
    margin: 0 10px;
    width: 130px
}

.jcf-range .jcf-range-track {
    margin: 0 20px 0 0;
    position: relative;
    display: block
}

.jcf-range .jcf-range-wrapper {
    background: #e5e5e5;
    border-radius: 5px;
    display: block;
    margin: 5px 0;
    height: 10px
}

.jcf-range.jcf-vertical {
    width: auto
}

.jcf-range.jcf-vertical .jcf-range-wrapper {
    margin: 0;
    width: 10px;
    height: auto;
    padding: 20px 0 0
}

.jcf-range.jcf-vertical .jcf-range-track {
    height: 180px;
    width: 10px
}

.jcf-range.jcf-vertical .jcf-range-handle {
    left: -5px;
    top: auto
}

.jcf-range .jcf-range-handle {
    position: absolute;
    background: #aaa;
    border-radius: 19px;
    width: 19px;
    height: 19px;
    margin: -4px 0 0;
    z-index: 1;
    top: 0;
    left: 0
}

.jcf-range .jcf-range-mark {
    position: absolute;
    overflow: hidden;
    background: #000;
    width: 1px;
    height: 3px;
    top: -7px;
    margin: 0 0 0 9px
}

.jcf-range.jcf-vertical .jcf-range-mark {
    margin: 0 0 9px;
    left: 14px;
    top: auto;
    width: 3px;
    height: 1px
}

.jcf-range.jcf-focus .jcf-range-handle {
    border: 1px solid #f00;
    margin: -5px 0 0 -1px
}

.jcf-range.jcf-disabled {
    background: none !important;
    opacity: 0.3
}

.jcf-disabled {
    background: #ddd !important
}

.jcf-focus,.jcf-focus * {
    border-color: #f00 !important
}

.jcf-number {
    display: inline-block;
    position: relative;
    height: 32px
}

.jcf-number input {
    -moz-appearance: textfield
}

.jcf-number input::-webkit-inner-spin-button,.jcf-number input::-webkit-outer-spin-button {
    -webkit-appearance: none
}

.jcf-number input {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #777;
    padding: 3px 27px 3px 7px;
    margin: 0;
    height: 100%
}

.jcf-number .jcf-btn-dec,.jcf-number .jcf-btn-inc {
    position: absolute;
    background: #aaa;
    width: 20px;
    height: 15px;
    right: 1px;
    top: 1px
}

.jcf-number .jcf-btn-dec {
    top: auto;
    bottom: 1px
}

.jcf-number .jcf-btn-dec:hover,.jcf-number .jcf-btn-inc:hover {
    background: #e6e6e6
}

.jcf-number.jcf-disabled .jcf-btn-dec:hover,.jcf-number.jcf-disabled .jcf-btn-inc:hover {
    background: #aaa
}

.jcf-number .jcf-btn-dec:before,.jcf-number .jcf-btn-inc:before {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    top: 50%;
    left: 50%;
    margin: -6px 0 0 -4px;
    border: 4px solid #aaa;
    border-color: transparent transparent #000 transparent
}

.jcf-number .jcf-btn-dec:before {
    margin: -1px 0 0 -4px;
    border-color: #000 transparent transparent transparent
}

.jcf-number.jcf-disabled .jcf-btn-dec:before,.jcf-number.jcf-disabled .jcf-btn-inc:before,.jcf-number .jcf-btn-dec.jcf-disabled:before,.jcf-number .jcf-btn-inc.jcf-disabled:before {
    opacity: 0.3
}

.jcf-number.jcf-disabled input {
    background: #ddd
}

.jcf-disabled {
    background: #ddd !important
}

.jcf-focus,.jcf-focus * {
    border-color: #f00 !important
}

.jcf-select {
    display: inline-block;
    vertical-align: top;
    position: relative;
    border: none;
    background-color: #f2f2f2;
    margin: 0 0 12px;
    min-width: 150px;
    height: 26px
}

.jcf-select select {
    z-index: 1;
    left: 0;
    top: 0
}

.jcf-select .jcf-select-text {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    cursor: default;
    display: block;
    font-size: 13px;
    line-height: 26px;
    margin: 0 35px 0 8px
}

.jcf-select .jcf-select-opener {
    position: absolute;
    text-align: center;
    width: 26px;
    bottom: 0;
    right: 0;
    top: 0
}

body>.jcf-select-drop {
    position: absolute;
    margin: -1px 0 0;
    z-index: 9999
}

body>.jcf-select-drop.jcf-drop-flipped {
    margin: 1px 0 0
}

.jcf-select .jcf-select-drop {
    position: absolute;
    margin-top: 0px;
    z-index: 9999;
    top: 100%;
    left: -1px;
    right: -1px
}

.jcf-select .jcf-drop-flipped {
    bottom: 100%;
    top: auto
}

.jcf-select-drop .jcf-select-drop-content {
    border: 1px solid #cbcbcb
}

.jcf-list-box {
    overflow: hidden;
    display: inline-block;
    border: 1px solid #b8c3c9;
    min-width: 200px;
    margin: 0 15px
}

.jcf-list {
    display: inline-block;
    vertical-align: top;
    position: relative;
    background: #fff;
    line-height: 14px;
    font-size: 12px;
    width: 100%
}

.jcf-list .jcf-list-content {
    vertical-align: top;
    display: inline-block;
    overflow: auto;
    width: 100%
}

.jcf-list ul {
    list-style: none;
    padding: 0;
    margin: 0
}

.jcf-list ul li {
    overflow: hidden;
    display: block
}

.jcf-list .jcf-overflow {
    overflow: auto
}

.jcf-list .jcf-option {
    overflow: hidden;
    cursor: default;
    display: block;
    padding: 5px 9px;
    color: #656565;
    height: 1%;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

.jcf-list .jcf-disabled {
    background: #fff !important;
    color: #aaa !important
}

.jcf-select-drop .jcf-hover,.jcf-list-box .jcf-selected {
    background: #e6e6e6;
    color: #000
}

.jcf-list .jcf-optgroup-caption {
    white-space: nowrap;
    font-weight: bold;
    display: block;
    padding: 5px 9px;
    cursor: default;
    color: #000
}

.jcf-list .jcf-optgroup .jcf-option {
    padding-left: 30px
}

.jcf-disabled {
    background: #ddd !important
}

.jcf-focus,.jcf-focus * {
    border-color: #f00 !important
}

@font-face {
    font-family: 'icomoon';
    src: url('/assets/fonts/icomoon.eot?6gbg1r');
    src: url('/assets/fonts/icomoon.eot?6gbg1r#iefix') format('embedded-opentype'), url('/assets/fonts/icomoon.ttf?6gbg1r') format('truetype'), url('/assets/fonts/icomoon.woff?6gbg1r') format('woff'), url('/assets/fonts/icomoon.svg?6gbg1r#icomoon') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

[class^=\"icon-\"],[class*=\" icon-\"] {
    font-family: 'icomoon' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-envelop:before {
    content: \"\\e902\";
    color: #ff6c4d
}

.icon-linked11 .path1:before {
    content: \"\\e90d\";
    color: #3975fc
}

.icon-linked11 .path2:before {
    content: \"\\e90e\";
    margin-left: -1em;
    color: #fff
}

.icon-linked-color1 .path1:before {
    content: \"\\e913\";
    color: #000;
    opacity: 0.16
}

.icon-linked-color1 .path2:before {
    content: \"\\e915\";
    margin-left: -0.9853515625em;
    color: #0077b5
}

.icon-linked-color1 .path3:before {
    content: \"\\e916\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-linked-color1 .path4:before {
    content: \"\\e917\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-linked-color1 .path5:before {
    content: \"\\e918\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-phone:before {
    content: \"\\e919\";
    color: #ff6c4d
}

.icon-smile-orange1:before {
    content: \"\\e91a\";
    color: #ff6c4d
}

.icon-tip:before {
    content: \"\\e91b\";
    color: #ff6c4d
}

.icon-calend:before {
    content: \"\\e907\"
}

.icon-fac-color .path1:before {
    content: \"\\e90f\";
    color: #000;
    opacity: 0.16
}

.icon-fac-color .path2:before {
    content: \"\\e910\";
    margin-left: -0.9853515625em;
    color: #3b5998
}

.icon-fac-color .path3:before {
    content: \"\\e911\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-facebook:before {
    content: \"\\e912\";
    color: #fff
}

.icon-filter-color:before {
    content: \"\\e914\";
    color: #fff
}

.icon-instag:before {
    content: \"\\e92c\";
    color: #fff
}

.icon-Josepho:before {
    content: \"\\e92d\";
    color: #ffe9db
}

.icon-Josepho-home .path1:before {
    content: \"\\e92e\";
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path2:before {
    content: \"\\e92f\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path3:before {
    content: \"\\e930\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path4:before {
    content: \"\\e931\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path5:before {
    content: \"\\e932\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path6:before {
    content: \"\\e933\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path7:before {
    content: \"\\e934\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path8:before {
    content: \"\\e935\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path9:before {
    content: \"\\e936\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path10:before {
    content: \"\\e937\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path11:before {
    content: \"\\e938\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path12:before {
    content: \"\\e939\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path13:before {
    content: \"\\e93a\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path14:before {
    content: \"\\e93b\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-Josepho-home .path15:before {
    content: \"\\e93c\";
    margin-left: -3.517578125em;
    color: #000;
    opacity: 0.16
}

.icon-Josepho-home .path16:before {
    content: \"\\e93d\";
    margin-left: -3.517578125em;
    color: #ff6c4d
}

.icon-layer-smile:before {
    content: \"\\e93f\";
    color: #ed6c59
}

.icon-layer-smile2:before {
    content: \"\\e940\";
    color: #ed6c59
}

.icon-line-blue:before {
    content: \"\\e955\";
    color: #3975fc
}

.icon-line-orange:before {
    content: \"\\e956\";
    color: #ff6c4d
}

.icon-linked-color .path1:before {
    content: \"\\e957\";
    color: #000;
    opacity: 0.16
}

.icon-linked-color .path2:before {
    content: \"\\e958\";
    margin-left: -0.9853515625em;
    color: #0077b5
}

.icon-linked-color .path3:before {
    content: \"\\e959\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-linked-color .path4:before {
    content: \"\\e95a\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-linked-color .path5:before {
    content: \"\\e95b\";
    margin-left: -0.9853515625em;
    color: #fff
}

.icon-logo-white:before {
    content: \"\\e95c\";
    color: #fff
}

.icon-map-bip:before {
    content: \"\\e95d\";
    color: #3975fc
}

.icon-share:before {
    content: \"\\e966\";
    color: #fff
}

.icon-smile1 .path1:before {
    content: \"\\e968\"
}

.icon-smile1 .path2:before {
    content: \"\\e969\";
    margin-left: -1em;
    color: #333
}

.icon-smile1 .path3:before {
    content: \"\\e96a\";
    margin-left: -1em;
    color: #333
}

.icon-smile1 .path4:before {
    content: \"\\e96b\";
    margin-left: -1em;
    color: #333
}

.icon-smile2 .path1:before {
    content: \"\\e96c\"
}

.icon-smile2 .path2:before {
    content: \"\\e96d\";
    margin-left: -1.0322265625em;
    color: #333
}

.icon-smile2 .path3:before {
    content: \"\\e96e\";
    margin-left: -1.0322265625em;
    color: #333
}

.icon-smile2 .path4:before {
    content: \"\\e96f\";
    margin-left: -1.0322265625em;
    color: #333
}

.icon-smile3 .path1:before {
    content: \"\\e970\"
}

.icon-smile3 .path2:before {
    content: \"\\e971\";
    margin-left: -1em;
    color: #333
}

.icon-smile3 .path3:before {
    content: \"\\e972\";
    margin-left: -1em;
    color: #333
}

.icon-smile3 .path4:before {
    content: \"\\e973\";
    margin-left: -1em;
    color: #333
}

.icon-smile4 .path1:before {
    content: \"\\e974\"
}

.icon-smile4 .path2:before {
    content: \"\\e975\";
    margin-left: -1.0322265625em;
    color: #fff
}

.icon-smile4 .path3:before {
    content: \"\\e976\";
    margin-left: -1.0322265625em;
    color: #333
}

.icon-smile4 .path4:before {
    content: \"\\e977\";
    margin-left: -1.0322265625em;
    color: #333
}

.icon-smile-blue:before {
    content: \"\\e978\";
    color: #3975fc
}

.icon-smile-orange:before {
    content: \"\\e979\";
    color: #ff6c4d
}

.icon-sticky-logo .path1:before {
    content: \"\\e97b\";
    color: #000;
    opacity: 0.16
}

.icon-sticky-logo .path2:before {
    content: \"\\e97c\";
    margin-left: -1em;
    color: #ff6c4d
}

.icon-sticky-logo .path3:before {
    content: \"\\e97d\";
    margin-left: -1em;
    color: #ffe9db
}

.icon-sticky-logo .path4:before {
    content: \"\\e97e\";
    margin-left: -1em;
    color: #ffe9db
}

.icon-sticky-logo .path5:before {
    content: \"\\e97f\";
    margin-left: -1em;
    color: #ffe9db
}

.icon-underline:before {
    content: \"\\e981\";
    color: #ff6c4d
}

.icon-world-see:before {
    content: \"\\e994\";
    color: #fff
}

.icon-arrow-right-t:before {
    content: \"\\e903\";
    color: #fff
}

/*
 * Bootstrap-select v1.13.9 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2019 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */
.bootstrap-select>select.bs-select-hidden,select.bs-select-hidden,select.selectpicker {
    display: none !important
}

.bootstrap-select {
    width: 220px \\0;
    vertical-align: middle
}

.bootstrap-select>.dropdown-toggle {
    position: relative;
    width: 100%;
    text-align: right;
    white-space: nowrap;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.bootstrap-select>.dropdown-toggle:after {
    margin-top: -1px
}

.bootstrap-select>.dropdown-toggle.bs-placeholder,.bootstrap-select>.dropdown-toggle.bs-placeholder:active,.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
    color: #999
}

.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:hover {
    color: rgba(255, 255, 255, 0.5)
}

.bootstrap-select>select {
    position: absolute !important;
    bottom: 0;
    left: 50%;
    display: block !important;
    width: 0.5px !important;
    height: 100% !important;
    padding: 0 !important;
    opacity: 0 !important;
    border: none;
    z-index: 0 !important
}

.bootstrap-select>select.mobile-device {
    top: 0;
    left: 0;
    display: block !important;
    width: 100% !important;
    z-index: 2 !important
}

.bootstrap-select.is-invalid .dropdown-toggle,.error .bootstrap-select .dropdown-toggle,.has-error .bootstrap-select .dropdown-toggle,.was-validated .bootstrap-select .selectpicker:invalid+.dropdown-toggle {
    border-color: #b94a48
}

.bootstrap-select.is-valid .dropdown-toggle,.was-validated .bootstrap-select .selectpicker:valid+.dropdown-toggle {
    border-color: #28a745
}

.bootstrap-select.fit-width {
    width: auto !important
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 220px
}

.bootstrap-select .dropdown-toggle:focus,.bootstrap-select>select.mobile-device:focus+.dropdown-toggle {
    outline: thin dotted #333 !important;
    outline: 5px auto -webkit-focus-ring-color !important;
    outline-offset: -2px
}

.bootstrap-select.form-control {
    margin-bottom: 0;
    padding: 0;
    border: none
}

:not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
    width: 100%
}

.bootstrap-select.form-control.input-group-btn {
    float: none;
    z-index: auto
}

.form-inline .bootstrap-select,.form-inline .bootstrap-select.form-control:not([class*=col-]) {
    width: auto
}

.bootstrap-select:not(.input-group-btn),.bootstrap-select[class*=col-] {
    float: none;
    display: inline-block;
    margin-left: 0
}

.bootstrap-select.dropdown-menu-right,.bootstrap-select[class*=col-].dropdown-menu-right,.row .bootstrap-select[class*=col-].dropdown-menu-right {
    float: right
}

.form-group .bootstrap-select,.form-horizontal .bootstrap-select,.form-inline .bootstrap-select {
    margin-bottom: 0
}

.form-group-lg .bootstrap-select.form-control,.form-group-sm .bootstrap-select.form-control {
    padding: 0
}

.form-group-lg .bootstrap-select.form-control .dropdown-toggle,.form-group-sm .bootstrap-select.form-control .dropdown-toggle {
    height: 100%;
    font-size: inherit;
    line-height: inherit;
    border-radius: inherit
}

.bootstrap-select.form-control-lg .dropdown-toggle,.bootstrap-select.form-control-sm .dropdown-toggle {
    font-size: inherit;
    line-height: inherit;
    border-radius: inherit
}

.bootstrap-select.form-control-sm .dropdown-toggle {
    padding: 0.25rem 0.5rem
}

.bootstrap-select.form-control-lg .dropdown-toggle {
    padding: 0.5rem 1rem
}

.form-inline .bootstrap-select .form-control {
    width: 100%
}

.bootstrap-select.disabled,.bootstrap-select>.disabled {
    cursor: not-allowed
}

.bootstrap-select.disabled:focus,.bootstrap-select>.disabled:focus {
    outline: 0 !important
}

.bootstrap-select.bs-container {
    position: absolute;
    top: 0;
    left: 0;
    height: 0 !important;
    padding: 0 !important
}

.bootstrap-select.bs-container .dropdown-menu {
    z-index: 1060
}

.bootstrap-select .dropdown-toggle .filter-option {
    position: static;
    top: 0;
    left: 0;
    float: left;
    height: 100%;
    width: 100%;
    text-align: left;
    overflow: hidden;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto
}

.bs3.bootstrap-select .dropdown-toggle .filter-option {
    padding-right: inherit
}

.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option {
    position: absolute;
    padding-top: inherit;
    padding-bottom: inherit;
    padding-left: inherit;
    float: none
}

.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner {
    padding-right: inherit
}

.bootstrap-select .dropdown-toggle .filter-option-inner-inner {
    overflow: hidden
}

.bootstrap-select .dropdown-toggle .filter-expand {
    width: 0 !important;
    float: left;
    opacity: 0 !important;
    overflow: hidden
}

.bootstrap-select .dropdown-toggle .caret {
    position: absolute;
    top: 50%;
    right: 12px;
    margin-top: -2px;
    vertical-align: middle
}

.input-group .bootstrap-select.form-control .dropdown-toggle {
    border-radius: inherit
}

.bootstrap-select[class*=col-] .dropdown-toggle {
    width: 100%
}

.bootstrap-select .dropdown-menu {
    min-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select .dropdown-menu>.inner:focus {
    outline: 0 !important
}

.bootstrap-select .dropdown-menu.inner {
    position: static;
    float: none;
    border: 0;
    padding: 0;
    margin: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none
}

.bootstrap-select .dropdown-menu li {
    position: relative
}

.bootstrap-select .dropdown-menu li.active small {
    color: rgba(255, 255, 255, 0.5) !important
}

.bootstrap-select .dropdown-menu li.disabled a {
    cursor: not-allowed
}

.bootstrap-select .dropdown-menu li a {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.bootstrap-select .dropdown-menu li a.opt {
    position: relative;
    padding-left: 2.25em
}

.bootstrap-select .dropdown-menu li a span.check-mark {
    display: none
}

.bootstrap-select .dropdown-menu li a span.text {
    display: inline-block
}

.bootstrap-select .dropdown-menu li small {
    padding-left: 0.5em
}

.bootstrap-select .dropdown-menu .notify {
    position: absolute;
    bottom: 5px;
    width: 96%;
    margin: 0 2%;
    min-height: 26px;
    padding: 3px 5px;
    background: #f5f5f5;
    border: 1px solid #e3e3e3;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    pointer-events: none;
    opacity: 0.9;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select .no-results {
    padding: 3px;
    background: #f5f5f5;
    margin: 0 5px;
    white-space: nowrap
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option {
    position: static;
    display: inline;
    padding: 0;
    width: auto
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
    display: inline
}

.bootstrap-select.fit-width .dropdown-toggle .bs-caret:before {
    content: '\\00a0'
}

.bootstrap-select.fit-width .dropdown-toggle .caret {
    position: static;
    top: auto;
    margin-top: -1px
}

.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
    position: absolute;
    display: inline-block;
    right: 15px;
    top: 5px
}

.bootstrap-select.show-tick .dropdown-menu li a span.text {
    margin-right: 34px
}

.bootstrap-select .bs-ok-default:after {
    content: '';
    display: block;
    width: 0.5em;
    height: 1em;
    border-style: solid;
    border-width: 0 0.26em 0.26em 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}

.bootstrap-select.show-menu-arrow.open>.dropdown-toggle,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle {
    z-index: 1061
}

.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
    content: '';
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid rgba(204, 204, 204, 0.2);
    position: absolute;
    bottom: -4px;
    left: 9px;
    display: none
}

.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
    content: '';
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #fff;
    position: absolute;
    bottom: -4px;
    left: 10px;
    display: none
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
    bottom: auto;
    top: -4px;
    border-top: 7px solid rgba(204, 204, 204, 0.2);
    border-bottom: 0
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
    bottom: auto;
    top: -4px;
    border-top: 6px solid #fff;
    border-bottom: 0
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
    right: 12px;
    left: auto
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
    right: 13px;
    left: auto
}

.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:before,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:before {
    display: block
}

.bs-actionsbox,.bs-donebutton,.bs-searchbox {
    padding: 4px 8px
}

.bs-actionsbox {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-actionsbox .btn-group button {
    width: 50%
}

.bs-donebutton {
    float: left;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-donebutton .btn-group button {
    width: 100%
}

.bs-searchbox+.bs-actionsbox {
    padding: 0 8px 4px
}

.bs-searchbox .form-control {
    margin-bottom: 0;
    width: 100%;
    float: none
}

.container {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 15px;
    box-sizing: border-box;
    background: none
}

#wrapper {
    position: relative
}

body {
    line-height: 1;
    font-size: 16px;
    margin: 0px
}

input[type=\"text\"],input[type=\"email\"],input[type=\"tel\"],input[type=\"number\"],input[type=\"phone\"],textarea {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    resize: none
}

ol,ul {
    list-style: none
}

a {
    text-decoration: none
}

.nav-link {
    color: #000;
    font-family: \"Centra No1\";
    margin-right: 20px;
    transition: 0.4s
}

.nav-link:hover {
    color: #ff6c4d
}

.solid {
    background-color: white;
    transition: background-color 1s ease 0s;
    box-shadow: 0 0 4px grey
}

.wrapp-smile-club a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

.btn-warning {
    transition: 0.3s
}

.btn-warning:hover {
    -webkit-box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    -webkit-transform: translateY(-1px);
    transform: translateY(-1px);
    background: #d45f46;
    color: white;
    transform: scale(1.1)
}

@media (min-width: 768px) {
    .nav-box .btn {
        font-size:14px;
        padding: 6px 24px
    }
}

.instafeed {
}

.instafeed .card-img {
    height: 300px;
    overflow: hidden;
}

.instafeed .card-img img {
    transition: transform 0.5s ease
}

.instafeed .card-img:hover img {
    transform: scale(1.5)
}

.chartBarsWrap.chartBarsHorizontal {
    flex-direction: column;
    padding-left: 70px
}

.chartBarsWrap.chartBarsHorizontal .bars b {
    color: #eee;
    width: 100%;
    position: absolute;
    bottom: initial;
    top: 1em;
    left: -102%;
    text-align: right
}

.chartBarsWrap.chartBarsHorizontal .chartBars {
    height: 200px
}

.chartBarsWrap.chartBarsHorizontal .chartBars .bars {
    border: 0
}

.chartBarsWrap.chartBarsHorizontal .chartBars .bars .bar {
    margin-bottom: 20px;
    width: 0;
    border-radius: 50px;
    height: 100% !important;
    color: white;
    padding-right: 18px;
    line-height: 56px;
    margin-right: 32px;
    text-align: right;
    font-size: 1.5em;
    -webkit-transition: 2s width cubic-bezier(0.6, 0.4, 0.4, 1.1);
    transition: 2s width cubic-bezier(0.6, 0.4, 0.4, 1.1)
}

.chartBarsWrap.chartBarsHorizontal .chartBars .bars .bar:after {
    font-size: 0.6em !important;
    margin-right: 20px
}

.bars li .bar.greenBar {
    background-color: #ffad9f
}

.bars li .bar.greenBarFlat {
    background-color: #ffad9f
}

.bars li .bar.blueBar {
    background-color: #ff6c4d
}

.bars li .bar.blueBarFlat {
    background-color: #ff6c4d
}

.bars li .bar.orangeBarFlat {
    background-color: #90dade
}

.orangeBarFlat:before {
    font-size: 29px;
    font-family: FontAwesome;
    content: \"\\f16d\";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    float: left;
    margin-left: 20px;
}

.greenBarFlat:before {
    font-size: 29px;
    font-family: FontAwesome;
    content: \"\\f39f\";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    float: left;
    margin-left: 20px;
}

.blueBarFlat:before {
    font-size: 29px;
    font-family: FontAwesome;
    content: \"\\f09a\";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    float: left;
    margin-left: 20px;
}

.purpleBarFlat:before {
    font-size: 29px;
    font-family: FontAwesome;
    content: \"\\f232\";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    float: left;
    margin-left: 20px;
}

.bars li .bar.orangeBarFlat {
    background-color: #90dade
}

.bars li .bar.purpleBar {
    background-color: #3975fc
}

.bars li .bar.purpleBarFlat {
    background-color: #3975fc
}

@media (max-width: 1080px) {
    .section-la-jabox-content .wrapp-text {
        margin-left:0px;
        text-align: center
    }
}

.section-la-jabox-content {
    padding: 140px 0 50px
}

.section-la-jabox-content li::before {
    content: none !important
}

@media (min-width: 768px) {
    .section-la-jabox-content {
        padding:300px 0 0
    }
}

.section-la-jabox-content .card-title {
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title {
        margin-bottom:128px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .card-title {
        margin-bottom:0
    }
}

.section-la-jabox-content .card-title h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title h1 {
        font-size:57px;
        line-height: 85px
    }
}

.section-la-jabox-content .card-title .line {
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%)
}

.section-la-jabox-content .row {
    margin-bottom: 25px
}

@media (min-width: 768px) {
    .section-la-jabox-content .row {
        margin-bottom:80px
    }
}

.section-la-jabox-content .col-12 {
    margin-bottom: 50px
}

.section-la-jabox-content .col-12:last-child {
    box-shadow: 0 -13px 18px rgba(0, 0, 0, 0.16);
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-12:last-child {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .col-item {
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-item {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .card-img img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-img img {
        opacity:1
    }
}

.section-la-jabox-content .decorize1 {
    top: -205px;
    left: 52%;
    transform: translateX(-50%)
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize1 {
        top:-205px;
        left: 86px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .decorize1 img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize1 img {
        opacity:1
    }
}

.section-la-jabox-content .decorize2 {
    background-image: url('/assets/images/min-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 27px;
    top: -150px;
    left: -10px;
    max-width: 250px;
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 {
        top:30px;
        padding: 27px 20px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1024px) {
    .section-la-jabox-content .decorize2 {
        right:90px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize2 {
        right:-80px
    }
}

.section-la-jabox-content .decorize2 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize2 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize2 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize3 {
    background-image: url('/assets/images/min-left-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 27px;
    top: -20px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 {
        top:95px;
        padding: 27px 20px;
        left: 20px;
        right: inherit
    }
}

@media (min-width: 1024px) {
    .section-la-jabox-content .decorize3 {
        left:90px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize3 {
        left:-10px
    }
}

@media (min-width: 1370px) {
    .section-la-jabox-content .decorize3 {
        left:-40px
    }
}

.section-la-jabox-content .decorize3 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize3 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize3 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 {
    background-image: url('/assets/images/big-right-orange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 100px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 {
        top:230px;
        right: -5px;
        left: inherit
    }
}

@media (min-width: 1024px) {
    .section-la-jabox-content .decorize4 {
        right:100px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize4 {
        right:-5px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor {
    padding: 20px 27px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize4 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize4 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize5 {
    background-image: url('/assets/images/big-left-prange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 290px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 {
        top:280px;
        left: -5px;
        right: inherit
    }
}

@media (min-width: 1024px) {
    .section-la-jabox-content .decorize5 {
        left:100px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize5 {
        left:-5px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor {
    padding: 20px 27px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize5 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize5 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize5 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize6 {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 470px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 {
        top:430px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1024px) {
    .section-la-jabox-content .decorize6 {
        right:120px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize6 {
        right:-50px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize6 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block;
    margin-left: 8px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize6 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize6 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 p {
        font-size:17px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .col-item-wrapp {
        margin-top:100px
    }
}

.section-la-jabox-content .wrapp-text {
    margin-left: 0px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .wrapp-text {
        margin-left:130px;
        margin-top: 33px
    }
}

.section-la-jabox-content .wrapp-text .title-text {
    margin-bottom: 50px;
    padding: 0 15px
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text {
        padding:0
    }
}

.section-la-jabox-content .wrapp-text .title-text strong {
    font-size: 30px;
    font-weight: 700;
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text strong {
        font-size:34px
    }
}

.section-la-jabox-content .wrapp-text ul {
    padding: 0;
    margin: 0
}

.section-la-jabox-content .wrapp-text ul li {
    margin-bottom: 20px;
    padding: 0 15px;
    border-bottom: 1px solid #ececec
}

.section-la-jabox-content .wrapp-text ul li:first-child {
    padding-top: 12px;
    border-top: 1px solid #ececec
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li:first-child {
        border-top:none;
        padding-top: 0
    }
}

.section-la-jabox-content .wrapp-text ul li:last-child {
    margin-bottom: 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li {
        padding:0
    }
}

.section-la-jabox-content .wrapp-text ul li .title {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px
}

.section-la-jabox-content .wrapp-text ul li .descrip {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 700;
    line-height: 28px
}

.section-la-jabox-content .bottom {
    width: 100%;
    padding: 0px 0 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom {
        padding:150px 0 0
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom {
        padding:0
    }
}

.section-la-jabox-content .bottom .card-img {
    margin-bottom: 35px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .card-img {
        margin-bottom:0
    }
}

.section-la-jabox-content .bottom .card-img img {
    max-width: 226px;
    width: 100%;
    opacity: 1;
    margin-top: 10px
}

.section-la-jabox-content .bottom .decorize1 {
    text-align: center;
    transform: translateX(0);
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 {
        position:absolute;
        transform: translateX(-50%);
        top: -145px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .decorize1 {
        top:-205px;
        left: 42px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .bottom .decorize1 img {
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 img {
        width:auto
    }
}

.section-la-jabox-content .bottom .wrapp-opt {
    z-index: -1
}

.section-la-jabox-content .bottom .decorize {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: -185px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize {
        position:absolute;
        z-index: 22
    }
}

@media (min-width: 1450px) {
    .section-la-jabox-content .bottom .decorize {
        top:-131px;
        right: -82px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor {
    padding: 27px 20px 15px;
    position: relative
}

.section-la-jabox-content .bottom .decorize .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .bottom .decorize .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .bottom .decorize .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .bottom .decorize p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize p {
        font-size:17px
    }
}

.title-lucky {
    color: #90dade;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

.embedresize {
    max-width: 560px;
    margin: auto
}

.embedresize div {
    position: relative;
    height: 0;
    padding-bottom: 56.25%
}

.embedresize iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.mt-21 {
    margin-top: 21vh
}

.wrapp-text ul {
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 31px;
    color: #707070
}

.wrapp-text ul li::before {
    display: inline-block;
    content: '';
    -webkit-border-radius: 0.375rem;
    border-radius: 0.375rem;
    height: 0.4rem;
    width: 0.4rem;
    margin-right: 0.5rem;
    background-color: orangered
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Extrabold.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Extrabold.woff') format('woff');
    font-weight: 800;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Black.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Book.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Book.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Book.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Book.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Extrabold.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Extrabold.woff') format('woff');
    font-weight: 800;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/CentraNo1-Black.woff2') format('woff2'), url('/assets/fonts/CentraNo1-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Lucky Fellas';
    src: url('/assets/fonts/LuckyFellas.woff2') format('woff2'), url('/assets/fonts/LuckyFellas.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'icomoon';
    src: url('/assets/fonts/icomoon.woff') format('woff'), url('/assets/fonts/icomoon.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

html,body {
    font-family: 'Centra No1', sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    overflow-x: hidden
}

.navbar-brand img {
    width: 50px;
    margin: 10px
}

.modal-login {
    max-width: 350px;
    border-radius: 30px;
    -webkit-box-shadow: 0px 25px 75px 0px rgba(0, 0, 0, 0.31);
    -moz-box-shadow: 0px 25px 75px 0px rgba(0, 0, 0, 0.31);
    box-shadow: 0px 25px 75px 0px rgba(0, 0, 0, 0.31);
    color: #636363
}

@media (max-width: 768px) {
    .modal-login {
        max-width:100%;
        padding: 70px 10px
    }
}

.modal-login .modal-content {
    padding: 20px;
    border-radius: 30px;
    border: none
}

.modal-login .modal-header {
    border-bottom: none;
    position: relative;
    justify-content: center
}

.modal-login h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px
}

.modal-login .form-control {
    display: block;
    width: 100%;
    height: calc(2.75rem + 2px);
    padding: 0.625rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #8898aa;
    background-color: #f5f5f5;
    background-clip: padding-box;
    border: none;
    border-radius: 50px;
    -webkit-box-shadow: none;
    box-shadow: none;
    transition: 0.3s
}

.modal-login .form-control:focus {
    border-color: #ff6c4d
}

.modal-login .close {
    position: absolute;
    top: -5px;
    right: -5px
}

.modal-login .modal-footer {
    background: #ecf0f1;
    text-align: center;
    justify-content: center;
    margin: 0 -20px -20px;
    border-radius: 0 0 30px 30px;
    font-size: 13px
}

.modal-login .modal-footer a {
    color: #ff6c4d;
    text-decoration: underline
}

.modal-login .avatar {
    z-index: 99;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: white;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1)
}

.modal-login .avatar img {
    width: 100%
}

@media only screen and (max-width: 600px) {
    .instafeed .card-img {
        height:auto;
        overflow: hidden
    }

    .cookie-consent {
        padding: 32px
    }

    .cookie-consent .btn {
        width: 100%
    }

    .cookie-consent img {
        top: -44px !important
    }
}

.cookie-consent {
    background: #ff6c4d;
    position: fixed;
    z-index: 999;
    width: 100%;
    bottom: 0;
    margin: 0
}

.cookie-consent img {
    bottom: 50px;
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    animation-name: spin;
    animation-duration: 5000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear
}

@keyframes spin {
    from {
        transform: rotate(0deg)
    }

    to {
        transform: rotate(360deg)
    }
}

.wrapp-selected {
    transition: 0.4s
}

.wrapp-selected:hover {
    cursor: pointer;
    box-shadow: 0 23px 50px 10px rgba(0, 0, 0, 0.13);
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px)
}

@media only screen and (max-width: 1300px) {
    .instafeed .card-img {
        height:auto;
        overflow: hidden
    }
}

.inputWithIcon {
    position: relative
}

.inputWithIcon i {
    position: absolute;
    left: 13px;
    top: 23px;
    color: #ff6c4d;
    transition: 0.3s
}

.inputWithIcon input[type=\"text\"]:focus+i {
    color: #ff6c4d
}

.inputWithIcon.inputIconBg i {
    background-color: #ff6c4d;
    color: #fff;
    padding: 9px 4px;
    border-radius: 4px 0 0 4px
}

.inputWithIcon.inputIconBg input[type=\"text\"]:focus+i {
    color: #fff;
    background-color: #ff6c4d
}

.data-time-text {
    padding: 17px 38px !important
}

.data-time-text:before {
    font-family: 'Font Awesome 5 Free';
    content: \"\\f073\";
    display: inline-block;
    margin-right: 20px;
    color: #ff6c4d
}

.option-selected:before {
    z-index: 1;
    background: white;
    border-radius: 50px;
    font-family: 'Font Awesome 5 Free';
    content: \"\\f058\";
    display: inline-block;
    margin-right: 20px;
    color: #69f0ae;
    position: absolute;
    left: 0;
    top: -19px;
    font-size: 50px
}

.resp-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%
}

.resp-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

#fixed-btn {
    z-index: 99999;
    position: fixed;
    width: 100%;
    bottom: 14px;
    -webkit-transition: bottom 0.3s;
    transition: bottom 0.3s
}

@media (min-width: 768px) {
    #fixed-btn {
        display:none !important
    }
}

.text-overflow {
    height: 120px;
    display: block;
    overflow: hidden;
    word-break: break-word;
    word-wrap: break-word
}

.btn-overflow {
    text-decoration: none
}

.ml-15p {
    margin-left: 15% !important
}

.StripeElement {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    border: none;
    padding: 13px 20px;
    width: 100%;
    height: auto
}

.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df
}

.StripeElement--invalid {
    border-color: #fa755a
}

.input-control:focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
    background: #f8f8f8
}

.StripeElement--webkit-autofill {
    background-color: #fefde5 !important
}

.google-autocomplete {
    padding: 10px 50px
}

.step-modal {
    border: 1px solid #707070;
    background-color: rgba(7, 7, 7, 0.4);
    bottom: 0;
    right: 0
}

.wheel-slideshow .slide {
    z-index: 98
}

.wrapp-contact-popup .card-img {
    border-radius: 40px !important;
    overflow: hidden !important;
    background-color: transparent !important
}

.discover-case-studies .slide-item img {
    width: auto !important;
    height: 100%;
    margin: auto
}

.discover-case-studies .card-box .card-img {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
    background-color: #fff;
    position: relative;
    min-height: 122px;
    padding-bottom: 30px
}

.row {
    margin-left: 0;
    margin-right: 0
}

.wrapp-intro-particulier .wrapp-btn {
    bottom: 0 !important
}

.section-booking_thanks-content img {
    border-radius: 29px;
    width: 100%;
    height: auto;
    max-width: 100%
}

.section-booking_thanks-content .smile-icon {
    position: absolute;
    left: 39%;
    top: -24%
}

.section-booking_thanks-content input {
    width: 70%;
    display: table-cell
}

.section-booking_thanks-content svg {
    width: 120px
}

.section-booking_thanks-content .footer-form {
    padding-top: 40px
}

.section-booking_thanks-content .row {
    padding-top: 100px;
    align-items: start !important
}

@media (min-width: 768px) {
    .section-booking_thanks-content .row {
        padding-top:0 !important
    }
}

#wrapper {
    overflow: hidden
}

.bg-cover {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center
}

.section-popular-question .box-item-nohover:hover {
    background-color: #90dade
}

.section-popular-question .box-item-nohover:hover strong {
    color: white
}

.section-popular-question .box-item-nohover:hover p {
    color: white
}

.fw-normal {
    font-weight: normal !important
}

.close-popup {
    position: absolute;
    right: 2px;
    top: -5px;
    font-size: 20px;
    cursor: pointer
}

.wrapp-contact-popup.minimized {
    width: 50px;
    padding: 0;
    cursor: pointer
}

.wrapp-contact-popup.minimized .hide-minimized {
    display: none !important
}

.wrapp-contact-popup.minimized li i {
    margin-right: 0px !important
}

.wrapp-contact-popup.minimized .card-img {
    width: 30px;
    background: none !important;
    border-radius: 50px !important;
    overflow: hidden !important;
    height: 30px !important;
    margin-bottom: 15px;
    margin-top: 15px;
    box-shadow: none;
    position: relative !important
}

@media (max-width: 800px) {
    .close-popup {
        display:none !important
    }
}

.message {
    border-radius: 30px;
    position: relative;
    display: table;
    margin: 40px 0;
    transition: all 0.2s ease;
    color: #fff;
    border-bottom: 7px solid #17a2b8;
    background-color: red
}

.message a {
    color: #fff
}

.message .message-icon {
    display: table-cell;
    width: 60px;
    padding: 20px 10px 0 20px;
    text-align: center;
    vertical-align: top
}

.message .message-icon>i {
    font-size: 22px;
    line-height: 50px;
    width: 50px;
    height: 50px;
    color: red;
    border-radius: 100%;
    background: rgba(255, 255, 255, 1)
}

.message .message-body {
    display: table-cell;
    padding: 29px 20px 20px 10px;
    vertical-align: middle
}

.message .message-body>p {
    line-height: 1.2;
    margin-top: 6px
}

.card-header {
    padding: 1.5rem;
    font-size: 22px
}

.customradio {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 0px;
    cursor: pointer;
    font-size: 18px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.customradio input {
    position: absolute;
    opacity: 0;
    cursor: pointer
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 22px;
    width: 22px;
    background-color: white;
    border-radius: 50%;
    border: 1px solid #bebebe
}

.customradio:hover input~.checkmark {
    background-color: transparent
}

.customradio input:checked~.checkmark {
    background-color: white;
    border: 1px solid #bebebe
}

.checkmark:after {
    content: \"\";
    position: absolute;
    display: none
}

.customradio input:checked~.checkmark:after {
    display: block
}

.customradio .checkmark:after {
    top: 2px;
    left: 2px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #ff6c4d
}

.wrapp-contact a {
    font-size: 18px;
    padding-bottom: 5px;
    display: inline-block;
    padding-top: 5px
}

#loading-view {
    max-height: 0
}

.gray-logos {
    background-color: #f2f2f2
}

.gray-logos .col {
    line-height: 60px
}

.gray-logos .col img {
    max-height: 60px
}

.booking-view .fb_dialog_content>iframe {
    bottom: 100px !important
}

.booking-view .fb_dialog_content>iframe:not(.normal-position-messenger) {
    right: 105px !important;
    top: calc(50vh + 75px) !important
}

.covid-btn.btn-default {
    font-size: 12px;
    display: flex !important
}

.covid-list {
    flex-grow: 4;
    text-align: left
}

.covid-list>ul {
    padding-left: 0.7em;
    list-style: none;
    margin-bottom: 0
}

.covid-list .list-item {
    font-size: x-small;
    font-weight: normal;
    color: #707070
}

.covid-btn p {
    color: #3975fc;
    font-weight: normal;
    font-family: 'Lucky Fellas'
}

.covid-list .list-item::before {
    content: \"•\";
    display: inline-block;
    width: 1em;
    margin-left: -1em
}

#loading-view {
    position: fixed;
    bottom: 0;
    left: 0;
    height: 100vh;
    max-height: 100vh;
    width: 100vw;
    background-color: #90dade;
    z-index: 99999999999;
    transition: max-height 0.5s
}

.wrapp-site-menu {
    display: none
}

@media only screen and (max-width: 768px) {
    .cheez-contact {
        display:none
    }

    .container .title-footer {
        font-size: 24px !important
    }

    .wrapp-list-contact-items .line-top>a>strong,.ups-text {
        font-size: 18px !important
    }

    .wrapp-list-contact-items .line-top>a>ul>li {
        font-size: 14px
    }

    .footer {
        z-index: 99999999 !important;
        position: relative
    }

    .container .nav-links .nav-items>a {
        display: block;
        width: 100%;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem
    }

    .separator-v {
        display: none
    }

    .section-smile-club .container .link-insta {
        font-size: x-small
    }
}

@media only screen and (min-width: 960px) {
    .separator-v {
        border-right:2px solid white
    }
}
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Get folder Josepho!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "            <div class=\"section-slidset-home\" style=\"position:relative;overflow:hidden\">
\t\t\t\t\t<div class=\"wheel-slideshow d-flex\">
\t\t\t\t\t    <div class=\"card-statick-img\">
\t\t\t\t\t        <picture>
\t\t\t\t\t            <source type=\"image/webp\" srcset=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/photo-bg.webp"), "html", null, true);
        echo "\">
\t\t\t\t\t            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/photo-bg.jpg"), "html", null, true);
        echo "\" alt=\"Photobooth, borne photo Josepho\" width=\"654\" height=\"847\">
\t\t\t\t\t        </picture>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"slideset\">

\t\t\t\t\t        <div class=\"slide\" style=\"overflow-x: hidden\">
\t\t\t\t\t            <div class=\"slide-img-gallery\">

\t\t\t\t\t                <picture>
\t\t\t\t\t                    <source type=\"image/webp\" data-srcset=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/habillage-borne-home.webp"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/habillage-borne-home.webp"), "html", null, true);
        echo "\">
\t\t\t\t\t                    <img class=\"ls-is-cached lazyloaded\" data-src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/habillage-borne-home.png"), "html", null, true);
        echo "\" alt=\"La borne JoBox et les cadres photo sont personnalisables\" src=\"/assets/images/habillage-borne-home.png\">
\t\t\t\t\t                </picture>
\t\t\t\t\t            </div>
\t\t\t\t\t             <div class=\"slide-text-gallery d-flex flex-column align-items-start \">
\t\t\t\t\t                <h1 class=\"mb-3\">Récupérez <br>vos <span>photos prises</span><br>avec Josepho</h1>
                                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"form-group next-step inputWithIcon\">
                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control input-control", "placeholder" => "https://josepho.io/..."]]);
        echo "
                                        <i class=\"fa fa-link fa-lg fa-fw\" aria-hidden=\"true\"></i>
                                        <br>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "submit", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
        echo "
                                    </div>
                                        
                                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t\t\t\t    </div>

\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"position: absolute !important;bottom: 20px;right: 0;width: 300px;text-align: right;z-index: 9;\">
\t\t\t\t</div>
\t\t\t</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27458 => 45,  27452 => 42,  27447 => 40,  27442 => 38,  27434 => 33,  27428 => 32,  27416 => 23,  27412 => 22,  27406 => 18,  27396 => 17,  27386 => 14,  27376 => 13,  27364 => 9,  27354 => 8,  27335 => 5,  12487 => 12469,  71 => 55,  69 => 17,  65 => 15,  63 => 13,  60 => 12,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Get folder Josepho!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <div class=\"section-slidset-home\" style=\"position:relative;overflow:hidden\">
\t\t\t\t\t<div class=\"wheel-slideshow d-flex\">
\t\t\t\t\t    <div class=\"card-statick-img\">
\t\t\t\t\t        <picture>
\t\t\t\t\t            <source type=\"image/webp\" srcset=\"{{ asset('asset/images/photo-bg.webp') }}\">
\t\t\t\t\t            <img src=\"{{ asset('asset/images/photo-bg.jpg') }}\" alt=\"Photobooth, borne photo Josepho\" width=\"654\" height=\"847\">
\t\t\t\t\t        </picture>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"slideset\">

\t\t\t\t\t        <div class=\"slide\" style=\"overflow-x: hidden\">
\t\t\t\t\t            <div class=\"slide-img-gallery\">

\t\t\t\t\t                <picture>
\t\t\t\t\t                    <source type=\"image/webp\" data-srcset=\"{{ asset('asset/images/habillage-borne-home.webp') }}\" srcset=\"{{ asset('asset/images/habillage-borne-home.webp') }}\">
\t\t\t\t\t                    <img class=\"ls-is-cached lazyloaded\" data-src=\"{{ asset('asset/images/habillage-borne-home.png') }}\" alt=\"La borne JoBox et les cadres photo sont personnalisables\" src=\"/assets/images/habillage-borne-home.png\">
\t\t\t\t\t                </picture>
\t\t\t\t\t            </div>
\t\t\t\t\t             <div class=\"slide-text-gallery d-flex flex-column align-items-start \">
\t\t\t\t\t                <h1 class=\"mb-3\">Récupérez <br>vos <span>photos prises</span><br>avec Josepho</h1>
                                    {{ form_start(form) }}
                                    <div class=\"form-group next-step inputWithIcon\">
                                        {{ form_widget(form.url, { 'attr': {'class': 'form-control input-control', 'placeholder': 'https://josepho.io/...'} }) }}
                                        <i class=\"fa fa-link fa-lg fa-fw\" aria-hidden=\"true\"></i>
                                        <br>{{ form_widget(form.submit, { 'attr': {'class': 'btn btn-warning'} }) }}
                                    </div>
                                        
                                    {{ form_end(form) }}
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t\t\t\t    </div>

\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"position: absolute !important;bottom: 20px;right: 0;width: 300px;text-align: right;z-index: 9;\">
\t\t\t\t</div>
\t\t\t</div>
        {% endblock %}
    </body>
</html>
<style>
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
}

*,*::before,*::after {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}

article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-size: 0.8125rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex=\"-1\"]:focus {
    outline: 0 !important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,h2,h3,h4,h5,h6 {
    margin-top: 0;
    margin-bottom: 0.5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[title],abbr[data-original-title] {
    text-decoration: underline;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    text-decoration-skip-ink: none
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

ol,ul,dl {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,ul ul,ol ul,ul ol {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

b,strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -0.25em
}

sup {
    top: -0.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):hover,a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}

pre,code,kbd,samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg {
    overflow: hidden;
    vertical-align: middle
}

table {
    border-collapse: collapse
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: 0.5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

input,button,select,optgroup,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,input {
    overflow: visible
}

button,select {
    text-transform: none
}

select {
    word-wrap: normal
}

button,[type=\"button\"],[type=\"reset\"],[type=\"submit\"] {
    -webkit-appearance: button
}

button:not(:disabled),[type=\"button\"]:not(:disabled),[type=\"reset\"]:not(:disabled),[type=\"submit\"]:not(:disabled) {
    cursor: pointer
}

button::-moz-focus-inner,[type=\"button\"]::-moz-focus-inner,[type=\"reset\"]::-moz-focus-inner,[type=\"submit\"]::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=\"radio\"],input[type=\"checkbox\"] {
    box-sizing: border-box;
    padding: 0
}

input[type=\"date\"],input[type=\"time\"],input[type=\"datetime-local\"],input[type=\"month\"] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=\"number\"]::-webkit-inner-spin-button,[type=\"number\"]::-webkit-outer-spin-button {
    height: auto
}

[type=\"search\"] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=\"search\"]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none !important
}

h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2
}

h1,.h1 {
    font-size: 2.8125rem
}

h2,.h2 {
    font-size: 2.75rem
}

h3,.h3 {
    font-size: 1.1875rem
}

h4,.h4 {
    font-size: 1.0625rem
}

h5,.h5 {
    font-size: 1.1538462rem
}

h6,.h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1)
}

small,.small {
    font-size: 80%;
    font-weight: 400
}

mark,.mark {
    padding: 0.2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}

.blockquote-footer::before {
    content: \"\\2014\\00A0\"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #6c757d
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word
}

a>code {
    color: inherit
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: 0.2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 576px) {
    .container {
        max-width:540px
    }
}

@media (min-width: 768px) {
    .container {
        max-width:720px
    }
}

@media (min-width: 992px) {
    .container {
        max-width:960px
    }
}

@media (min-width: 1200px) {
    .container {
        max-width:1140px
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,.no-gutters>[class*=\"col-\"] {
    padding-right: 0;
    padding-left: 0
}

.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col,.col-auto,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm,.col-sm-auto,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md,.col-md-auto,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg,.col-lg-auto,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl,.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%
}

.col-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%
}

.col-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%
}

.col-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%
}

.col-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%
}

.col-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    order: -1
}

.order-last {
    order: 13
}

.order-0 {
    order: 0
}

.order-1 {
    order: 1
}

.order-2 {
    order: 2
}

.order-3 {
    order: 3
}

.order-4 {
    order: 4
}

.order-5 {
    order: 5
}

.order-6 {
    order: 6
}

.order-7 {
    order: 7
}

.order-8 {
    order: 8
}

.order-9 {
    order: 9
}

.order-10 {
    order: 10
}

.order-11 {
    order: 11
}

.order-12 {
    order: 12
}

.offset-1 {
    margin-left: 8.3333333333%
}

.offset-2 {
    margin-left: 16.6666666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.3333333333%
}

.offset-5 {
    margin-left: 41.6666666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.3333333333%
}

.offset-8 {
    margin-left: 66.6666666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.3333333333%
}

.offset-11 {
    margin-left: 91.6666666667%
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-sm-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-sm-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-sm-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-sm-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-sm-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-sm-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-sm-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-sm-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-sm-first {
        order: -1
    }

    .order-sm-last {
        order: 13
    }

    .order-sm-0 {
        order: 0
    }

    .order-sm-1 {
        order: 1
    }

    .order-sm-2 {
        order: 2
    }

    .order-sm-3 {
        order: 3
    }

    .order-sm-4 {
        order: 4
    }

    .order-sm-5 {
        order: 5
    }

    .order-sm-6 {
        order: 6
    }

    .order-sm-7 {
        order: 7
    }

    .order-sm-8 {
        order: 8
    }

    .order-sm-9 {
        order: 9
    }

    .order-sm-10 {
        order: 10
    }

    .order-sm-11 {
        order: 11
    }

    .order-sm-12 {
        order: 12
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.3333333333%
    }

    .offset-sm-2 {
        margin-left: 16.6666666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.3333333333%
    }

    .offset-sm-5 {
        margin-left: 41.6666666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.3333333333%
    }

    .offset-sm-8 {
        margin-left: 66.6666666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.3333333333%
    }

    .offset-sm-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-md-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-md-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-md-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-md-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-md-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-md-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-md-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-md-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-md-first {
        order: -1
    }

    .order-md-last {
        order: 13
    }

    .order-md-0 {
        order: 0
    }

    .order-md-1 {
        order: 1
    }

    .order-md-2 {
        order: 2
    }

    .order-md-3 {
        order: 3
    }

    .order-md-4 {
        order: 4
    }

    .order-md-5 {
        order: 5
    }

    .order-md-6 {
        order: 6
    }

    .order-md-7 {
        order: 7
    }

    .order-md-8 {
        order: 8
    }

    .order-md-9 {
        order: 9
    }

    .order-md-10 {
        order: 10
    }

    .order-md-11 {
        order: 11
    }

    .order-md-12 {
        order: 12
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.3333333333%
    }

    .offset-md-2 {
        margin-left: 16.6666666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.3333333333%
    }

    .offset-md-5 {
        margin-left: 41.6666666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.3333333333%
    }

    .offset-md-8 {
        margin-left: 66.6666666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.3333333333%
    }

    .offset-md-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-lg-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-lg-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-lg-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-lg-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-lg-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-lg-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-lg-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-lg-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-lg-first {
        order: -1
    }

    .order-lg-last {
        order: 13
    }

    .order-lg-0 {
        order: 0
    }

    .order-lg-1 {
        order: 1
    }

    .order-lg-2 {
        order: 2
    }

    .order-lg-3 {
        order: 3
    }

    .order-lg-4 {
        order: 4
    }

    .order-lg-5 {
        order: 5
    }

    .order-lg-6 {
        order: 6
    }

    .order-lg-7 {
        order: 7
    }

    .order-lg-8 {
        order: 8
    }

    .order-lg-9 {
        order: 9
    }

    .order-lg-10 {
        order: 10
    }

    .order-lg-11 {
        order: 11
    }

    .order-lg-12 {
        order: 12
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.3333333333%
    }

    .offset-lg-2 {
        margin-left: 16.6666666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.3333333333%
    }

    .offset-lg-5 {
        margin-left: 41.6666666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.3333333333%
    }

    .offset-lg-8 {
        margin-left: 66.6666666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.3333333333%
    }

    .offset-lg-11 {
        margin-left: 91.6666666667%
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis:0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-xl-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }

    .col-xl-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }

    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-xl-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }

    .col-xl-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }

    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-xl-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }

    .col-xl-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }

    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-xl-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }

    .col-xl-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }

    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-xl-first {
        order: -1
    }

    .order-xl-last {
        order: 13
    }

    .order-xl-0 {
        order: 0
    }

    .order-xl-1 {
        order: 1
    }

    .order-xl-2 {
        order: 2
    }

    .order-xl-3 {
        order: 3
    }

    .order-xl-4 {
        order: 4
    }

    .order-xl-5 {
        order: 5
    }

    .order-xl-6 {
        order: 6
    }

    .order-xl-7 {
        order: 7
    }

    .order-xl-8 {
        order: 8
    }

    .order-xl-9 {
        order: 9
    }

    .order-xl-10 {
        order: 10
    }

    .order-xl-11 {
        order: 11
    }

    .order-xl-12 {
        order: 12
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.3333333333%
    }

    .offset-xl-2 {
        margin-left: 16.6666666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.3333333333%
    }

    .offset-xl-5 {
        margin-left: 41.6666666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.3333333333%
    }

    .offset-xl-8 {
        margin-left: 66.6666666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.3333333333%
    }

    .offset-xl-11 {
        margin-left: 91.6666666667%
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529
}

.table th,.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table-sm th,.table-sm td {
    padding: 0.3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered th,.table-bordered td {
    border: 1px solid #dee2e6
}

.table-bordered thead th,.table-bordered thead td {
    border-bottom-width: 2px
}

.table-borderless th,.table-borderless td,.table-borderless thead th,.table-borderless tbody+tbody {
    border: 0
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05)
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, 0.075)
}

.table-primary,.table-primary>th,.table-primary>td {
    background-color: #b8daff
}

.table-primary th,.table-primary td,.table-primary thead th,.table-primary tbody+tbody {
    border-color: #7abaff
}

.table-hover .table-primary:hover {
    background-color: #9ecdff
}

.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th {
    background-color: #9ecdff
}

.table-secondary,.table-secondary>th,.table-secondary>td {
    background-color: #d6d8db
}

.table-secondary th,.table-secondary td,.table-secondary thead th,.table-secondary tbody+tbody {
    border-color: #b3b7bb
}

.table-hover .table-secondary:hover {
    background-color: #c8cccf
}

.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th {
    background-color: #c8cccf
}

.table-success,.table-success>th,.table-success>td {
    background-color: #c3e6cb
}

.table-success th,.table-success td,.table-success thead th,.table-success tbody+tbody {
    border-color: #8fd19e
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,.table-info>th,.table-info>td {
    background-color: #bee5eb
}

.table-info th,.table-info td,.table-info thead th,.table-info tbody+tbody {
    border-color: #86cfda
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,.table-warning>th,.table-warning>td {
    background-color: #ffeeba
}

.table-warning th,.table-warning td,.table-warning thead th,.table-warning tbody+tbody {
    border-color: #ffdf7e
}

.table-hover .table-warning:hover {
    background-color: #ffe7a0
}

.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th {
    background-color: #ffe7a0
}

.table-danger,.table-danger>th,.table-danger>td {
    background-color: #f5c6cb
}

.table-danger th,.table-danger td,.table-danger thead th,.table-danger tbody+tbody {
    border-color: #ed969e
}

.table-hover .table-danger:hover {
    background-color: #f1b1b7
}

.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th {
    background-color: #f1b1b7
}

.table-light,.table-light>th,.table-light>td {
    background-color: #fdfdfe
}

.table-light th,.table-light td,.table-light thead th,.table-light tbody+tbody {
    border-color: #fbfcfc
}

.table-hover .table-light:hover {
    background-color: #f1f1f1
}

.table-hover .table-light:hover>td,.table-hover .table-light:hover>th {
    background-color: #f1f1f1
}

.table-dark,.table-dark>th,.table-dark>td {
    background-color: #c6c8ca
}

.table-dark th,.table-dark td,.table-dark thead th,.table-dark tbody+tbody {
    border-color: #95999c
}

.table-hover .table-dark:hover {
    background-color: #b9bbbd
}

.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th {
    background-color: #b9bbbd
}

.table-active,.table-active>th,.table-active>td {
    background-color: rgba(0, 0, 0, 0.075)
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075)
}

.table-hover .table-active:hover>td,.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, 0.075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #343a40
}

.table-dark th,.table-dark td,.table-dark thead th {
    border-color: #454d55
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05)
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075)
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-sm>.table-bordered {
        border: 0
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-md>.table-bordered {
        border: 0
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-lg>.table-bordered {
        border: 0
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-xl>.table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

.table-responsive>.table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .form-control {
        transition: none
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:disabled,.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file,.form-control-range {
    display: block;
    width: 100%
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-sm,.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

select.form-control[size],select.form-control[multiple] {
    height: auto
}

textarea.form-control {
    height: auto
}

.form-text {
    display: block;
    margin-top: 0.25rem
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row>.col,.form-row>[class*=\"col-\"] {
    padding-right: 5px;
    padding-left: 5px
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem
}

.form-check-input:disabled~.form-check-label {
    color: #6c757d
}

.form-check-label {
    margin-bottom: 0
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(40, 167, 69, 0.9);
    border-radius: 0.25rem
}

.was-validated .form-control:valid,.form-control.is-valid {
    border-color: #28a745;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .form-control:valid:focus,.form-control.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .form-control:valid~.valid-feedback,.form-control.is-valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip,.form-control.is-valid~.valid-tooltip {
    display: block
}

.was-validated textarea.form-control:valid,textarea.form-control.is-valid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem)
}

.was-validated .custom-select:valid,.custom-select.is-valid {
    border-color: #28a745;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px, url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\") #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .custom-select:valid:focus,.custom-select.is-valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .custom-select:valid~.valid-feedback,.custom-select.is-valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip,.custom-select.is-valid~.valid-tooltip {
    display: block
}

.was-validated .form-control-file:valid~.valid-feedback,.form-control-file.is-valid~.valid-feedback,.was-validated .form-control-file:valid~.valid-tooltip,.form-control-file.is-valid~.valid-tooltip {
    display: block
}

.was-validated .form-check-input:valid~.form-check-label,.form-check-input.is-valid~.form-check-label {
    color: #28a745
}

.was-validated .form-check-input:valid~.valid-feedback,.form-check-input.is-valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip,.form-check-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-control-input:valid~.custom-control-label,.custom-control-input.is-valid~.custom-control-label {
    color: #28a745
}

.was-validated .custom-control-input:valid~.custom-control-label::before,.custom-control-input.is-valid~.custom-control-label::before {
    border-color: #28a745
}

.was-validated .custom-control-input:valid~.valid-feedback,.custom-control-input.is-valid~.valid-feedback,.was-validated .custom-control-input:valid~.valid-tooltip,.custom-control-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,.custom-control-input.is-valid:checked~.custom-control-label::before {
    border-color: #34ce57;
    background-color: #34ce57
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,.custom-control-input.is-valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
    border-color: #28a745
}

.was-validated .custom-file-input:valid~.custom-file-label,.custom-file-input.is-valid~.custom-file-label {
    border-color: #28a745
}

.was-validated .custom-file-input:valid~.valid-feedback,.custom-file-input.is-valid~.valid-feedback,.was-validated .custom-file-input:valid~.valid-tooltip,.custom-file-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,.custom-file-input.is-valid:focus~.custom-file-label {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 0.25rem
}

.was-validated .form-control:invalid,.form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E\");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .form-control:invalid:focus,.form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .form-control:invalid~.invalid-feedback,.form-control.is-invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem)
}

.was-validated .custom-select:invalid,.custom-select.is-invalid {
    border-color: #dc3545;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px, url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E\") #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)
}

.was-validated .custom-select:invalid:focus,.custom-select.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .custom-select:invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.custom-select.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .form-control-file:invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip,.form-control-file.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .form-check-input:invalid~.form-check-label,.form-check-input.is-invalid~.form-check-label {
    color: #dc3545
}

.was-validated .form-check-input:invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip,.form-check-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-control-input:invalid~.custom-control-label,.custom-control-input.is-invalid~.custom-control-label {
    color: #dc3545
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,.custom-control-input.is-invalid~.custom-control-label::before {
    border-color: #dc3545
}

.was-validated .custom-control-input:invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip,.custom-control-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,.custom-control-input.is-invalid:checked~.custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,.custom-control-input.is-invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
    border-color: #dc3545
}

.was-validated .custom-file-input:invalid~.custom-file-label,.custom-file-input.is-invalid~.custom-file-label {
    border-color: #dc3545
}

.was-validated .custom-file-input:invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip,.custom-file-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,.custom-file-input.is-invalid:focus~.custom-file-label {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25)
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width: 576px) {
    .form-inline label {
        display:flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0
    }

    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-plaintext {
        display: inline-block
    }

    .form-inline .input-group,.form-inline .custom-select {
        width: auto
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center
    }

    .form-inline .custom-control-label {
        margin-bottom: 0
    }
}

.btn {
    display: inline-block;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .btn {
        transition: none
    }
}

.btn:hover {
    color: #212529;
    text-decoration: none
}

.btn:focus,.btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.btn.disabled,.btn:disabled {
    opacity: 0.65
}

a.btn.disabled,fieldset:disabled a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary:focus,.btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5)
}

.btn-primary.disabled,.btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not(:disabled):not(.disabled):active,.btn-primary:not(:disabled):not(.disabled).active,.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf
}

.btn-primary:not(:disabled):not(.disabled):active:focus,.btn-primary:not(:disabled):not(.disabled).active:focus,.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5)
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62
}

.btn-secondary:focus,.btn-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5)
}

.btn-secondary.disabled,.btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:not(:disabled):not(.disabled):active,.btn-secondary:not(:disabled):not(.disabled).active,.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,.btn-secondary:not(:disabled):not(.disabled).active:focus,.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success:focus,.btn-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5)
}

.btn-success.disabled,.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled):active,.btn-success:not(:disabled):not(.disabled).active,.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled):active:focus,.btn-success:not(:disabled):not(.disabled).active:focus,.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info:focus,.btn-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5)
}

.btn-info.disabled,.btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not(:disabled):not(.disabled):active,.btn-info:not(:disabled):not(.disabled).active,.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f
}

.btn-info:not(:disabled):not(.disabled):active:focus,.btn-info:not(:disabled):not(.disabled).active:focus,.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5)
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning:focus,.btn-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5)
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show>.btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500
}

.btn-warning:not(:disabled):not(.disabled):active:focus,.btn-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger:focus,.btn-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5)
}

.btn-danger.disabled,.btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not(:disabled):not(.disabled):active,.btn-danger:not(:disabled):not(.disabled).active,.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d
}

.btn-danger:not(:disabled):not(.disabled):active:focus,.btn-danger:not(:disabled):not(.disabled).active:focus,.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5)
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light:focus,.btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5)
}

.btn-light.disabled,.btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not(:disabled):not(.disabled):active,.btn-light:not(:disabled):not(.disabled).active,.show>.btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df
}

.btn-light:not(:disabled):not(.disabled):active:focus,.btn-light:not(:disabled):not(.disabled).active:focus,.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark:focus,.btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5)
}

.btn-dark.disabled,.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not(:disabled):not(.disabled):active,.btn-dark:not(:disabled):not(.disabled).active,.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d
}

.btn-dark:not(:disabled):not(.disabled):active:focus,.btn-dark:not(:disabled):not(.disabled).active:focus,.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5)
}

.btn-outline-primary {
    color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:focus,.btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.btn-outline-primary.disabled,.btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not(:disabled):not(.disabled):active,.btn-outline-primary:not(:disabled):not(.disabled).active,.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:focus,.btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.btn-outline-secondary.disabled,.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,.btn-outline-secondary:not(:disabled):not(.disabled).active,.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:focus,.btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.btn-outline-success.disabled,.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not(:disabled):not(.disabled):active,.btn-outline-success:not(:disabled):not(.disabled).active,.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,.btn-outline-success:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:focus,.btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.btn-outline-info.disabled,.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not(:disabled):not(.disabled):active,.btn-outline-info:not(:disabled):not(.disabled).active,.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,.btn-outline-info:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.btn-outline-warning {
    color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:focus,.btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.btn-outline-warning.disabled,.btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not(:disabled):not(.disabled):active,.btn-outline-warning:not(:disabled):not(.disabled).active,.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:focus,.btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.btn-outline-danger.disabled,.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not(:disabled):not(.disabled):active,.btn-outline-danger:not(:disabled):not(.disabled).active,.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:focus,.btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.btn-outline-light.disabled,.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not(:disabled):not(.disabled):active,.btn-outline-light:not(:disabled):not(.disabled).active,.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,.btn-outline-light:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:focus,.btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.btn-outline-dark.disabled,.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not(:disabled):not(.disabled):active,.btn-outline-dark:not(:disabled):not(.disabled).active,.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    text-decoration: none
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline
}

.btn-link:focus,.btn-link.focus {
    text-decoration: underline;
    box-shadow: none
}

.btn-link:disabled,.btn-link.disabled {
    color: #6c757d;
    pointer-events: none
}

.btn-lg,.btn-group-lg>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

.btn-sm,.btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: 0.5rem
}

input[type=\"submit\"].btn-block,input[type=\"reset\"].btn-block,input[type=\"button\"].btn-block {
    width: 100%
}

.fade {
    transition: opacity 0.15s linear
}

@media (prefers-reduced-motion:reduce) {
    .fade {
        transition: none
    }
}

.fade:not(.show) {
    opacity: 0
}

.collapse:not(.show) {
    display: none
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease
}

@media (prefers-reduced-motion:reduce) {
    .collapsing {
        transition: none
    }
}

.dropup,.dropright,.dropdown,.dropleft {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem
}

.dropdown-menu-left {
    right: auto;
    left: 0
}

.dropdown-menu-right {
    right: 0;
    left: auto
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-toggle::after {
    vertical-align: 0
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: \"\"
}

.dropleft .dropdown-toggle::after {
    display: none
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: \"\";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-menu[x-placement^=\"top\"],.dropdown-menu[x-placement^=\"right\"],.dropdown-menu[x-placement^=\"bottom\"],.dropdown-menu[x-placement^=\"left\"] {
    right: auto;
    bottom: auto
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-item:hover,.dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active,.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled,.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.6875rem;
    color: #6c757d;
    white-space: nowrap
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle
}

.btn-group>.btn,.btn-group-vertical>.btn {
    position: relative;
    flex: 1 1 auto
}

.btn-group>.btn:hover,.btn-group-vertical>.btn:hover {
    z-index: 1
}

.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active {
    z-index: 1
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group>.btn:not(:first-child),.btn-group>.btn-group:not(:first-child) {
    margin-left: -1px
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),.btn-group>.btn-group:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:not(:first-child),.btn-group>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem
}

.dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after {
    margin-left: 0
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0
}

.btn-sm+.dropdown-toggle-split,.btn-group-sm>.btn+.dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem
}

.btn-lg+.dropdown-toggle-split,.btn-group-lg>.btn+.dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center
}

.btn-group-vertical>.btn,.btn-group-vertical>.btn-group {
    width: 100%
}

.btn-group-vertical>.btn:not(:first-child),.btn-group-vertical>.btn-group:not(:first-child) {
    margin-top: -1px
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),.btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn:not(:first-child),.btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0
}

.btn-group-toggle>.btn input[type=\"radio\"],.btn-group-toggle>.btn-group>.btn input[type=\"radio\"],.btn-group-toggle>.btn input[type=\"checkbox\"],.btn-group-toggle>.btn-group>.btn input[type=\"checkbox\"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%
}

.input-group>.form-control,.input-group>.form-control-plaintext,.input-group>.custom-select,.input-group>.custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0
}

.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.form-control,.input-group>.custom-select+.form-control,.input-group>.custom-file+.form-control,.input-group>.form-control+.custom-select,.input-group>.form-control-plaintext+.custom-select,.input-group>.custom-select+.custom-select,.input-group>.custom-file+.custom-select,.input-group>.form-control+.custom-file,.input-group>.form-control-plaintext+.custom-file,.input-group>.custom-select+.custom-file,.input-group>.custom-file+.custom-file {
    margin-left: -1px
}

.input-group>.form-control:focus,.input-group>.custom-select:focus,.input-group>.custom-file .custom-file-input:focus~.custom-file-label {
    z-index: 3
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4
}

.input-group>.form-control:not(:last-child),.input-group>.custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.form-control:not(:first-child),.input-group>.custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group>.custom-file {
    display: flex;
    align-items: center
}

.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-prepend,.input-group-append {
    display: flex
}

.input-group-prepend .btn,.input-group-append .btn {
    position: relative;
    z-index: 2
}

.input-group-prepend .btn:focus,.input-group-append .btn:focus {
    z-index: 3
}

.input-group-prepend .btn+.btn,.input-group-append .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-append .btn+.input-group-text,.input-group-prepend .input-group-text+.input-group-text,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-append .input-group-text+.btn {
    margin-left: -1px
}

.input-group-prepend {
    margin-right: -1px
}

.input-group-append {
    margin-left: -1px
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.25rem
}

.input-group-text input[type=\"radio\"],.input-group-text input[type=\"checkbox\"] {
    margin-top: 0
}

.input-group-lg>.form-control:not(textarea),.input-group-lg>.custom-select {
    height: calc(1.5em + 1rem + 2px)
}

.input-group-lg>.form-control,.input-group-lg>.custom-select,.input-group-lg>.input-group-prepend>.input-group-text,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-append>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem
}

.input-group-sm>.form-control:not(textarea),.input-group-sm>.custom-select {
    height: calc(1.5em + 0.5rem + 2px)
}

.input-group-sm>.form-control,.input-group-sm>.custom-select,.input-group-sm>.input-group-prepend>.input-group-text,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-append>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.input-group-lg>.custom-select,.input-group-sm>.custom-select {
    padding-right: 1.75rem
}

.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text,.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.21875rem;
    padding-left: 1.5rem
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #80bdff
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff;
    border-color: #b3d7ff
}

.custom-control-input:disabled~.custom-control-label {
    color: #6c757d
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #e9ecef
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top
}

.custom-control-label::before {
    position: absolute;
    top: 0.109375rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: \"\";
    background-color: #fff;
    border: #adb5bd solid 1px
}

.custom-control-label::after {
    position: absolute;
    top: 0.109375rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: \"\";
    background: no-repeat 50% / 50% 50%
}

.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e\")
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
    border-color: #007bff;
    background-color: #007bff
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e\")
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-radio .custom-control-label::before {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\")
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-switch {
    padding-left: 2.25rem
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem
}

.custom-switch .custom-control-label::after {
    top: calc(0.109375rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-switch .custom-control-label::after {
        transition: none
    }
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem)
}

.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5)
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e\") no-repeat right 0.75rem center / 8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple],.custom-select[size]:not([size=\"1\"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef
}

.custom-select::-ms-expand {
    display: none
}

.custom-select-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem
}

.custom-select-lg {
    height: calc(1.5em + 1rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus~.custom-file-label {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-file-input:disabled~.custom-file-label {
    background-color: #e9ecef
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: \"Browse\"
}

.custom-file-input~.custom-file-label[data-browse]::after {
    content: attr(data-browse)
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: \"Browse\";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0
}

.custom-range {
    width: 100%;
    height: calc(1rem + 0.4rem);
    padding: 0;
    background-color: transparent;
    appearance: none
}

.custom-range:focus {
    outline: none
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.custom-range::-moz-focus-outer {
    border: 0
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-moz-range-thumb {
        transition: none
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-ms-thumb {
        transition: none
    }
}

.custom-range::-ms-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-moz-range-track {
    cursor: default
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd
}

.custom-control-label::before,.custom-file-label,.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-control-label::before,.custom-file-label,.custom-select {
        transition: none
    }
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem
}

.nav-link:hover,.nav-link:focus {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.nav-tabs .nav-link:hover,.nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: 0.25rem
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem
}

.navbar>.container,.navbar>.container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:hover,.navbar-brand:focus {
    text-decoration: none
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem
}

.navbar-toggler:hover,.navbar-toggler:focus {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: \"\";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width: 575.98px) {
    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start
}

.navbar-expand>.container,.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem
}

.navbar-expand>.container,.navbar-expand>.container-fluid {
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-brand:hover,.navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-nav .nav-link:hover,.navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3)
}

.navbar-light .navbar-nav .show>.nav-link,.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-text a:hover,.navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:hover,.navbar-dark .navbar-brand:focus {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-nav .nav-link:hover,.navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25)
}

.navbar-dark .navbar-nav .show>.nav-link,.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .nav-link.active {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:hover,.navbar-dark .navbar-text a:focus {
    color: #fff
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.card-title {
    margin-bottom: 0.75rem
}

.card-subtitle {
    margin-top: -0.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link+.card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125)
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid rgba(0, 0, 0, 0.125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px)
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -0.75rem;
    margin-left: -0.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img {
    width: 100%;
    border-radius: calc(0.25rem - 1px)
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px)
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px)
}

.card-deck {
    display: flex;
    flex-direction: column
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-deck {
        flex-flow:row wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group {
    display: flex;
    flex-direction: column
}

.card-group>.card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-group {
        flex-flow:row wrap
    }

    .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-top,.card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-bottom,.card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-top,.card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-bottom,.card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0
    }
}

.card-columns .card {
    margin-bottom: 0.75rem
}

@media (min-width: 576px) {
    .card-columns {
        column-count:3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1
    }

    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.accordion>.card {
    overflow: hidden
}

.accordion>.card:not(:first-of-type) .card-header:first-child {
    border-radius: 0
}

.accordion>.card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0
}

.accordion>.card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.accordion>.card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.accordion>.card .card-header {
    margin-bottom: -1px
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: \"/\"
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #6c757d
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6
}

.page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 3.4375rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.6875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .badge {
        transition: none
    }
}

a.badge:hover,a.badge:focus {
    text-decoration: none
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

a.badge-primary:hover,a.badge-primary:focus {
    color: #fff;
    background-color: #0062cc
}

a.badge-primary:focus,a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5)
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d
}

a.badge-secondary:hover,a.badge-secondary:focus {
    color: #fff;
    background-color: #545b62
}

a.badge-secondary:focus,a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5)
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

a.badge-success:hover,a.badge-success:focus {
    color: #fff;
    background-color: #1e7e34
}

a.badge-success:focus,a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5)
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

a.badge-info:hover,a.badge-info:focus {
    color: #fff;
    background-color: #117a8b
}

a.badge-info:focus,a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5)
}

.badge-warning {
    color: #212529;
    background-color: #ffc107
}

a.badge-warning:hover,a.badge-warning:focus {
    color: #212529;
    background-color: #d39e00
}

a.badge-warning:focus,a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5)
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

a.badge-danger:hover,a.badge-danger:focus {
    color: #fff;
    background-color: #bd2130
}

a.badge-danger:focus,a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5)
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa
}

a.badge-light:hover,a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5
}

a.badge-light:focus,a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5)
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

a.badge-dark:hover,a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124
}

a.badge-dark:focus,a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5)
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 0.3rem
}

@media (min-width: 576px) {
    .jumbotron {
        padding:4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible {
    padding-right: 4rem
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9ecdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert-secondary hr {
    border-top-color: #c8cccf
}

.alert-secondary .alert-link {
    color: #212326
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c32
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe7a0
}

.alert-warning .alert-link {
    color: #533f02
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b1b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #f1f1f1
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbd
}

.alert-dark .alert-link {
    color: #040505
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    transition: width 0.6s ease
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar {
        transition: none
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar-animated {
        animation: none
    }
}

.media {
    display: flex;
    align-items: flex-start
}

.media-body {
    flex: 1
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:hover,.list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125)
}

.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem
}

.list-group-item.disabled,.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-horizontal {
    flex-direction: row
}

.list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0
}

.list-group-horizontal .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0
}

.list-group-horizontal .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction:row
    }

    .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction:row
    }

    .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction:row
    }

    .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction:row
    }

    .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0
    }
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

.list-group-item-primary.list-group-item-action:hover,.list-group-item-primary.list-group-item-action:focus {
    color: #004085;
    background-color: #9ecdff
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db
}

.list-group-item-secondary.list-group-item-action:hover,.list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cccf
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

.list-group-item-success.list-group-item-action:hover,.list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

.list-group-item-info.list-group-item-action:hover,.list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

.list-group-item-warning.list-group-item-action:hover,.list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe7a0
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

.list-group-item-danger.list-group-item-action:hover,.list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b1b7
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

.list-group-item-light.list-group-item-action:hover,.list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #f1f1f1
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

.list-group-item-dark.list-group-item-action:hover,.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbd
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.5
}

.close:hover {
    color: #000;
    text-decoration: none
}

.close:not(:disabled):not(.disabled):hover,.close:not(:disabled):not(.disabled):focus {
    opacity: 0.75
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    appearance: none
}

a.close.disabled {
    pointer-events: none
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem
}

.toast.showing {
    opacity: 1
}

.toast.show {
    display: block;
    opacity: 1
}

.toast.hide {
    display: none
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05)
}

.toast-body {
    padding: 0.75rem
}

.modal-open {
    overflow: hidden
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px)
}

@media (prefers-reduced-motion:reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    transform: none
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem)
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden
}

.modal-dialog-scrollable .modal-header,.modal-dialog-scrollable .modal-footer {
    flex-shrink: 0
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem)
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: \"\"
}

.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: 0.5
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem
}

.modal-footer>:not(:first-child) {
    margin-left: 0.25rem
}

.modal-footer>:not(:last-child) {
    margin-right: 0.25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width:500px;
        margin: 1.75rem auto
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem)
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem)
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem)
    }

    .modal-sm {
        max-width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg,.modal-xl {
        max-width:800px
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width:1140px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: 0.9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem
}

.tooltip .arrow::before {
    position: absolute;
    content: \"\";
    border-color: transparent;
    border-style: solid
}

.bs-tooltip-top,.bs-tooltip-auto[x-placement^=\"top\"] {
    padding: 0.4rem 0
}

.bs-tooltip-top .arrow,.bs-tooltip-auto[x-placement^=\"top\"] .arrow {
    bottom: 0
}

.bs-tooltip-top .arrow::before,.bs-tooltip-auto[x-placement^=\"top\"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000
}

.bs-tooltip-right,.bs-tooltip-auto[x-placement^=\"right\"] {
    padding: 0 0.4rem
}

.bs-tooltip-right .arrow,.bs-tooltip-auto[x-placement^=\"right\"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem
}

.bs-tooltip-right .arrow::before,.bs-tooltip-auto[x-placement^=\"right\"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000
}

.bs-tooltip-bottom,.bs-tooltip-auto[x-placement^=\"bottom\"] {
    padding: 0.4rem 0
}

.bs-tooltip-bottom .arrow,.bs-tooltip-auto[x-placement^=\"bottom\"] .arrow {
    top: 0
}

.bs-tooltip-bottom .arrow::before,.bs-tooltip-auto[x-placement^=\"bottom\"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000
}

.bs-tooltip-left,.bs-tooltip-auto[x-placement^=\"left\"] {
    padding: 0 0.4rem
}

.bs-tooltip-left .arrow,.bs-tooltip-auto[x-placement^=\"left\"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem
}

.bs-tooltip-left .arrow::before,.bs-tooltip-auto[x-placement^=\"left\"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem
}

.popover .arrow::before,.popover .arrow::after {
    position: absolute;
    display: block;
    content: \"\";
    border-color: transparent;
    border-style: solid
}

.bs-popover-top,.bs-popover-auto[x-placement^=\"top\"] {
    margin-bottom: 0.5rem
}

.bs-popover-top>.arrow,.bs-popover-auto[x-placement^=\"top\"]>.arrow {
    bottom: calc((0.5rem + 1px) * -1)
}

.bs-popover-top>.arrow::before,.bs-popover-auto[x-placement^=\"top\"]>.arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-top>.arrow::after,.bs-popover-auto[x-placement^=\"top\"]>.arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff
}

.bs-popover-right,.bs-popover-auto[x-placement^=\"right\"] {
    margin-left: 0.5rem
}

.bs-popover-right>.arrow,.bs-popover-auto[x-placement^=\"right\"]>.arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0
}

.bs-popover-right>.arrow::before,.bs-popover-auto[x-placement^=\"right\"]>.arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-right>.arrow::after,.bs-popover-auto[x-placement^=\"right\"]>.arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff
}

.bs-popover-bottom,.bs-popover-auto[x-placement^=\"bottom\"] {
    margin-top: 0.5rem
}

.bs-popover-bottom>.arrow,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow {
    top: calc((0.5rem + 1px) * -1)
}

.bs-popover-bottom>.arrow::before,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-bottom>.arrow::after,.bs-popover-auto[x-placement^=\"bottom\"]>.arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff
}

.bs-popover-bottom .popover-header::before,.bs-popover-auto[x-placement^=\"bottom\"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: \"\";
    border-bottom: 1px solid #f7f7f7
}

.bs-popover-left,.bs-popover-auto[x-placement^=\"left\"] {
    margin-right: 0.5rem
}

.bs-popover-left>.arrow,.bs-popover-auto[x-placement^=\"left\"]>.arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0
}

.bs-popover-left>.arrow::before,.bs-popover-auto[x-placement^=\"left\"]>.arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25)
}

.bs-popover-left>.arrow::after,.bs-popover-auto[x-placement^=\"left\"]>.arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.8125rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: 0.5rem 0.75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel.pointer-event {
    touch-action: pan-y
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: \"\"
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .carousel-item {
        transition: none
    }
}

.carousel-item.active,.carousel-item-next,.carousel-item-prev {
    display: block
}

.carousel-item-next:not(.carousel-item-left),.active.carousel-item-right {
    transform: translateX(100%)
}

.carousel-item-prev:not(.carousel-item-right),.active.carousel-item-left {
    transform: translateX(-100%)
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none
}

.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1
}

.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s 0.6s opacity
}

@media (prefers-reduced-motion:reduce) {
    .carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
        transition: none
    }
}

.carousel-control-prev,.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-control-prev,.carousel-control-next {
        transition: none
    }
}

.carousel-control-prev:hover,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-prev-icon,.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%
}

.carousel-control-prev-icon {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e\")
}

.carousel-control-next-icon {
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e\")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-indicators li {
        transition: none
    }
}

.carousel-indicators .active {
    opacity: 1
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg)
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: spinner-border 0.75s linear infinite
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em
}

@keyframes spinner-grow {
    0% {
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    animation: spinner-grow 0.75s linear infinite
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem
}

.align-baseline {
    vertical-align: baseline !important
}

.align-top {
    vertical-align: top !important
}

.align-middle {
    vertical-align: middle !important
}

.align-bottom {
    vertical-align: bottom !important
}

.align-text-bottom {
    vertical-align: text-bottom !important
}

.align-text-top {
    vertical-align: text-top !important
}

.bg-primary {
    background-color: #007bff !important
}

a.bg-primary:hover,button.bg-primary:hover,a.bg-primary:focus,button.bg-primary:focus {
    background-color: #0062cc !important
}

.bg-secondary {
    background-color: #6c757d !important
}

a.bg-secondary:hover,button.bg-secondary:hover,a.bg-secondary:focus,button.bg-secondary:focus {
    background-color: #545b62 !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:hover,button.bg-success:hover,a.bg-success:focus,button.bg-success:focus {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:hover,button.bg-info:hover,a.bg-info:focus,button.bg-info:focus {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:hover,button.bg-warning:hover,a.bg-warning:focus,button.bg-warning:focus {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:hover,button.bg-danger:hover,a.bg-danger:focus,button.bg-danger:focus {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:hover,button.bg-light:hover,a.bg-light:focus,button.bg-light:focus {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:hover,button.bg-dark:hover,a.bg-dark:focus,button.bg-dark:focus {
    background-color: #1d2124 !important
}

.bg-white {
    background-color: #fff !important
}

.bg-transparent {
    background-color: transparent !important
}

.border {
    border: 1px solid #dee2e6 !important
}

.border-top {
    border-top: 1px solid #dee2e6 !important
}

.border-right {
    border-right: 1px solid #dee2e6 !important
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important
}

.border-left {
    border-left: 1px solid #dee2e6 !important
}

.border-0 {
    border: 0 !important
}

.border-top-0 {
    border-top: 0 !important
}

.border-right-0 {
    border-right: 0 !important
}

.border-bottom-0 {
    border-bottom: 0 !important
}

.border-left-0 {
    border-left: 0 !important
}

.border-primary {
    border-color: #007bff !important
}

.border-secondary {
    border-color: #6c757d !important
}

.border-success {
    border-color: #28a745 !important
}

.border-info {
    border-color: #17a2b8 !important
}

.border-warning {
    border-color: #ffc107 !important
}

.border-danger {
    border-color: #dc3545 !important
}

.border-light {
    border-color: #f8f9fa !important
}

.border-dark {
    border-color: #343a40 !important
}

.border-white {
    border-color: #fff !important
}

.rounded-sm {
    border-radius: 0.2rem !important
}

.rounded {
    border-radius: 0.25rem !important
}

.rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important
}

.rounded-right {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important
}

.rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important
}

.rounded-left {
    border-top-left-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important
}

.rounded-lg {
    border-radius: 0.3rem !important
}

.rounded-circle {
    border-radius: 50% !important
}

.rounded-pill {
    border-radius: 50rem !important
}

.rounded-0 {
    border-radius: 0 !important
}

.clearfix::after {
    display: block;
    clear: both;
    content: \"\"
}

.d-none {
    display: none !important
}

.d-inline {
    display: inline !important
}

.d-inline-block {
    display: inline-block !important
}

.d-block {
    display: block !important
}

.d-table {
    display: table !important
}

.d-table-row {
    display: table-row !important
}

.d-table-cell {
    display: table-cell !important
}

.d-flex {
    display: flex !important
}

.d-inline-flex {
    display: inline-flex !important
}

@media (min-width: 576px) {
    .d-sm-none {
        display:none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
    }

    .d-sm-block {
        display: block !important
    }

    .d-sm-table {
        display: table !important
    }

    .d-sm-table-row {
        display: table-row !important
    }

    .d-sm-table-cell {
        display: table-cell !important
    }

    .d-sm-flex {
        display: flex !important
    }

    .d-sm-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display:none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
    }

    .d-md-block {
        display: block !important
    }

    .d-md-table {
        display: table !important
    }

    .d-md-table-row {
        display: table-row !important
    }

    .d-md-table-cell {
        display: table-cell !important
    }

    .d-md-flex {
        display: flex !important
    }

    .d-md-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display:none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
    }

    .d-lg-block {
        display: block !important
    }

    .d-lg-table {
        display: table !important
    }

    .d-lg-table-row {
        display: table-row !important
    }

    .d-lg-table-cell {
        display: table-cell !important
    }

    .d-lg-flex {
        display: flex !important
    }

    .d-lg-inline-flex {
        display: inline-flex !important
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display:none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: flex !important
    }

    .d-xl-inline-flex {
        display: inline-flex !important
    }
}

@media print {
    .d-print-none {
        display: none !important
    }

    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: flex !important
    }

    .d-print-inline-flex {
        display: inline-flex !important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: \"\"
}

.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.8571428571%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.embed-responsive-21by9::before {
    padding-top: 42.8571428571%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    flex-direction: row !important
}

.flex-column {
    flex-direction: column !important
}

.flex-row-reverse {
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    flex-direction: column-reverse !important
}

.flex-wrap {
    flex-wrap: wrap !important
}

.flex-nowrap {
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important
}

.flex-fill {
    flex: 1 1 auto !important
}

.flex-grow-0 {
    flex-grow: 0 !important
}

.flex-grow-1 {
    flex-grow: 1 !important
}

.flex-shrink-0 {
    flex-shrink: 0 !important
}

.flex-shrink-1 {
    flex-shrink: 1 !important
}

.justify-content-start {
    justify-content: flex-start !important
}

.justify-content-end {
    justify-content: flex-end !important
}

.justify-content-center {
    justify-content: center !important
}

.justify-content-between {
    justify-content: space-between !important
}

.justify-content-around {
    justify-content: space-around !important
}

.align-items-start {
    align-items: flex-start !important
}

.align-items-end {
    align-items: flex-end !important
}

.align-items-center {
    align-items: center !important
}

.align-items-baseline {
    align-items: baseline !important
}

.align-items-stretch {
    align-items: stretch !important
}

.align-content-start {
    align-content: flex-start !important
}

.align-content-end {
    align-content: flex-end !important
}

.align-content-center {
    align-content: center !important
}

.align-content-between {
    align-content: space-between !important
}

.align-content-around {
    align-content: space-around !important
}

.align-content-stretch {
    align-content: stretch !important
}

.align-self-auto {
    align-self: auto !important
}

.align-self-start {
    align-self: flex-start !important
}

.align-self-end {
    align-self: flex-end !important
}

.align-self-center {
    align-self: center !important
}

.align-self-baseline {
    align-self: baseline !important
}

.align-self-stretch {
    align-self: stretch !important
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction:row !important
    }

    .flex-sm-column {
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-sm-fill {
        flex: 1 1 auto !important
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-sm-start {
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        justify-content: center !important
    }

    .justify-content-sm-between {
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        justify-content: space-around !important
    }

    .align-items-sm-start {
        align-items: flex-start !important
    }

    .align-items-sm-end {
        align-items: flex-end !important
    }

    .align-items-sm-center {
        align-items: center !important
    }

    .align-items-sm-baseline {
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        align-items: stretch !important
    }

    .align-content-sm-start {
        align-content: flex-start !important
    }

    .align-content-sm-end {
        align-content: flex-end !important
    }

    .align-content-sm-center {
        align-content: center !important
    }

    .align-content-sm-between {
        align-content: space-between !important
    }

    .align-content-sm-around {
        align-content: space-around !important
    }

    .align-content-sm-stretch {
        align-content: stretch !important
    }

    .align-self-sm-auto {
        align-self: auto !important
    }

    .align-self-sm-start {
        align-self: flex-start !important
    }

    .align-self-sm-end {
        align-self: flex-end !important
    }

    .align-self-sm-center {
        align-self: center !important
    }

    .align-self-sm-baseline {
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction:row !important
    }

    .flex-md-column {
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-md-wrap {
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-md-fill {
        flex: 1 1 auto !important
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-md-start {
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        justify-content: center !important
    }

    .justify-content-md-between {
        justify-content: space-between !important
    }

    .justify-content-md-around {
        justify-content: space-around !important
    }

    .align-items-md-start {
        align-items: flex-start !important
    }

    .align-items-md-end {
        align-items: flex-end !important
    }

    .align-items-md-center {
        align-items: center !important
    }

    .align-items-md-baseline {
        align-items: baseline !important
    }

    .align-items-md-stretch {
        align-items: stretch !important
    }

    .align-content-md-start {
        align-content: flex-start !important
    }

    .align-content-md-end {
        align-content: flex-end !important
    }

    .align-content-md-center {
        align-content: center !important
    }

    .align-content-md-between {
        align-content: space-between !important
    }

    .align-content-md-around {
        align-content: space-around !important
    }

    .align-content-md-stretch {
        align-content: stretch !important
    }

    .align-self-md-auto {
        align-self: auto !important
    }

    .align-self-md-start {
        align-self: flex-start !important
    }

    .align-self-md-end {
        align-self: flex-end !important
    }

    .align-self-md-center {
        align-self: center !important
    }

    .align-self-md-baseline {
        align-self: baseline !important
    }

    .align-self-md-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction:row !important
    }

    .flex-lg-column {
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-lg-fill {
        flex: 1 1 auto !important
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-lg-start {
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        justify-content: center !important
    }

    .justify-content-lg-between {
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        justify-content: space-around !important
    }

    .align-items-lg-start {
        align-items: flex-start !important
    }

    .align-items-lg-end {
        align-items: flex-end !important
    }

    .align-items-lg-center {
        align-items: center !important
    }

    .align-items-lg-baseline {
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        align-items: stretch !important
    }

    .align-content-lg-start {
        align-content: flex-start !important
    }

    .align-content-lg-end {
        align-content: flex-end !important
    }

    .align-content-lg-center {
        align-content: center !important
    }

    .align-content-lg-between {
        align-content: space-between !important
    }

    .align-content-lg-around {
        align-content: space-around !important
    }

    .align-content-lg-stretch {
        align-content: stretch !important
    }

    .align-self-lg-auto {
        align-self: auto !important
    }

    .align-self-lg-start {
        align-self: flex-start !important
    }

    .align-self-lg-end {
        align-self: flex-end !important
    }

    .align-self-lg-center {
        align-self: center !important
    }

    .align-self-lg-baseline {
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        align-self: stretch !important
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction:row !important
    }

    .flex-xl-column {
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .flex-xl-fill {
        flex: 1 1 auto !important
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important
    }

    .justify-content-xl-start {
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        justify-content: center !important
    }

    .justify-content-xl-between {
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        justify-content: space-around !important
    }

    .align-items-xl-start {
        align-items: flex-start !important
    }

    .align-items-xl-end {
        align-items: flex-end !important
    }

    .align-items-xl-center {
        align-items: center !important
    }

    .align-items-xl-baseline {
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        align-items: stretch !important
    }

    .align-content-xl-start {
        align-content: flex-start !important
    }

    .align-content-xl-end {
        align-content: flex-end !important
    }

    .align-content-xl-center {
        align-content: center !important
    }

    .align-content-xl-between {
        align-content: space-between !important
    }

    .align-content-xl-around {
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        align-content: stretch !important
    }

    .align-self-xl-auto {
        align-self: auto !important
    }

    .align-self-xl-start {
        align-self: flex-start !important
    }

    .align-self-xl-end {
        align-self: flex-end !important
    }

    .align-self-xl-center {
        align-self: center !important
    }

    .align-self-xl-baseline {
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        align-self: stretch !important
    }
}

.float-left {
    float: left !important
}

.float-right {
    float: right !important
}

.float-none {
    float: none !important
}

@media (min-width: 576px) {
    .float-sm-left {
        float:left !important
    }

    .float-sm-right {
        float: right !important
    }

    .float-sm-none {
        float: none !important
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float:left !important
    }

    .float-md-right {
        float: right !important
    }

    .float-md-none {
        float: none !important
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float:left !important
    }

    .float-lg-right {
        float: right !important
    }

    .float-lg-none {
        float: none !important
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float:left !important
    }

    .float-xl-right {
        float: right !important
    }

    .float-xl-none {
        float: none !important
    }
}

.overflow-auto {
    overflow: auto !important
}

.overflow-hidden {
    overflow: hidden !important
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: sticky !important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports (position: sticky) {
    .sticky-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important
}

.shadow-none {
    box-shadow: none !important
}

.w-25 {
    width: 25% !important
}

.w-50 {
    width: 50% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.w-auto {
    width: auto !important
}

.h-25 {
    height: 25% !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.h-auto {
    height: auto !important
}

.mw-100 {
    max-width: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.min-vw-100 {
    min-width: 100vw !important
}

.min-vh-100 {
    min-height: 100vh !important
}

.vw-100 {
    width: 100vw !important
}

.vh-100 {
    height: 100vh !important
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: \"\";
    background-color: rgba(0, 0, 0, 0)
}

.m-0 {
    margin: 0 !important
}

.mt-0,.my-0 {
    margin-top: 0 !important
}

.mr-0,.mx-0 {
    margin-right: 0 !important
}

.mb-0,.my-0 {
    margin-bottom: 0 !important
}

.ml-0,.mx-0 {
    margin-left: 0 !important
}

.m-1 {
    margin: 0.25rem !important
}

.mt-1,.my-1 {
    margin-top: 0.25rem !important
}

.mr-1,.mx-1 {
    margin-right: 0.25rem !important
}

.mb-1,.my-1 {
    margin-bottom: 0.25rem !important
}

.ml-1,.mx-1 {
    margin-left: 0.25rem !important
}

.m-2 {
    margin: 0.5rem !important
}

.mt-2,.my-2 {
    margin-top: 0.5rem !important
}

.mr-2,.mx-2 {
    margin-right: 0.5rem !important
}

.mb-2,.my-2 {
    margin-bottom: 0.5rem !important
}

.ml-2,.mx-2 {
    margin-left: 0.5rem !important
}

.m-3 {
    margin: 1rem !important
}

.mt-3,.my-3 {
    margin-top: 1rem !important
}

.mr-3,.mx-3 {
    margin-right: 1rem !important
}

.mb-3,.my-3 {
    margin-bottom: 1rem !important
}

.ml-3,.mx-3 {
    margin-left: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.mt-4,.my-4 {
    margin-top: 1.5rem !important
}

.mr-4,.mx-4 {
    margin-right: 1.5rem !important
}

.mb-4,.my-4 {
    margin-bottom: 1.5rem !important
}

.ml-4,.mx-4 {
    margin-left: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.mt-5,.my-5 {
    margin-top: 3rem !important
}

.mr-5,.mx-5 {
    margin-right: 3rem !important
}

.mb-5,.my-5 {
    margin-bottom: 3rem !important
}

.ml-5,.mx-5 {
    margin-left: 3rem !important
}

.m-6 {
    margin: 4.5rem !important
}

.mt-6,.my-6 {
    margin-top: 4.5rem !important
}

.mr-6,.mx-6 {
    margin-right: 4.5rem !important
}

.mb-6,.my-6 {
    margin-bottom: 4.5rem !important
}

.ml-6,.mx-6 {
    margin-left: 4.5rem !important
}

.m-7 {
    margin: 6rem !important
}

.mt-7,.my-7 {
    margin-top: 6rem !important
}

.mr-7,.mx-7 {
    margin-right: 6rem !important
}

.mb-7,.my-7 {
    margin-bottom: 6rem !important
}

.ml-7,.mx-7 {
    margin-left: 6rem !important
}

.m-8 {
    margin: 7.5rem !important
}

.mt-8,.my-8 {
    margin-top: 7.5rem !important
}

.mr-8,.mx-8 {
    margin-right: 7.5rem !important
}

.mb-8,.my-8 {
    margin-bottom: 7.5rem !important
}

.ml-8,.mx-8 {
    margin-left: 7.5rem !important
}

.m-9 {
    margin: 9rem !important
}

.mt-9,.my-9 {
    margin-top: 9rem !important
}

.mr-9,.mx-9 {
    margin-right: 9rem !important
}

.mb-9,.my-9 {
    margin-bottom: 9rem !important
}

.ml-9,.mx-9 {
    margin-left: 9rem !important
}

.m-10 {
    margin: 10.5rem !important
}

.mt-10,.my-10 {
    margin-top: 10.5rem !important
}

.mr-10,.mx-10 {
    margin-right: 10.5rem !important
}

.mb-10,.my-10 {
    margin-bottom: 10.5rem !important
}

.ml-10,.mx-10 {
    margin-left: 10.5rem !important
}

.p-0 {
    padding: 0 !important
}

.pt-0,.py-0 {
    padding-top: 0 !important
}

.pr-0,.px-0 {
    padding-right: 0 !important
}

.pb-0,.py-0 {
    padding-bottom: 0 !important
}

.pl-0,.px-0 {
    padding-left: 0 !important
}

.p-1 {
    padding: 0.25rem !important
}

.pt-1,.py-1 {
    padding-top: 0.25rem !important
}

.pr-1,.px-1 {
    padding-right: 0.25rem !important
}

.pb-1,.py-1 {
    padding-bottom: 0.25rem !important
}

.pl-1,.px-1 {
    padding-left: 0.25rem !important
}

.p-2 {
    padding: 0.5rem !important
}

.pt-2,.py-2 {
    padding-top: 0.5rem !important
}

.pr-2,.px-2 {
    padding-right: 0.5rem !important
}

.pb-2,.py-2 {
    padding-bottom: 0.5rem !important
}

.pl-2,.px-2 {
    padding-left: 0.5rem !important
}

.p-3 {
    padding: 1rem !important
}

.pt-3,.py-3 {
    padding-top: 1rem !important
}

.pr-3,.px-3 {
    padding-right: 1rem !important
}

.pb-3,.py-3 {
    padding-bottom: 1rem !important
}

.pl-3,.px-3 {
    padding-left: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.pt-4,.py-4 {
    padding-top: 1.5rem !important
}

.pr-4,.px-4 {
    padding-right: 1.5rem !important
}

.pb-4,.py-4 {
    padding-bottom: 1.5rem !important
}

.pl-4,.px-4 {
    padding-left: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.pt-5,.py-5 {
    padding-top: 3rem !important
}

.pr-5,.px-5 {
    padding-right: 3rem !important
}

.pb-5,.py-5 {
    padding-bottom: 3rem !important
}

.pl-5,.px-5 {
    padding-left: 3rem !important
}

.p-6 {
    padding: 4.5rem !important
}

.pt-6,.py-6 {
    padding-top: 4.5rem !important
}

.pr-6,.px-6 {
    padding-right: 4.5rem !important
}

.pb-6,.py-6 {
    padding-bottom: 4.5rem !important
}

.pl-6,.px-6 {
    padding-left: 4.5rem !important
}

.p-7 {
    padding: 6rem !important
}

.pt-7,.py-7 {
    padding-top: 6rem !important
}

.pr-7,.px-7 {
    padding-right: 6rem !important
}

.pb-7,.py-7 {
    padding-bottom: 6rem !important
}

.pl-7,.px-7 {
    padding-left: 6rem !important
}

.p-8 {
    padding: 7.5rem !important
}

.pt-8,.py-8 {
    padding-top: 7.5rem !important
}

.pr-8,.px-8 {
    padding-right: 7.5rem !important
}

.pb-8,.py-8 {
    padding-bottom: 7.5rem !important
}

.pl-8,.px-8 {
    padding-left: 7.5rem !important
}

.p-9 {
    padding: 9rem !important
}

.pt-9,.py-9 {
    padding-top: 9rem !important
}

.pr-9,.px-9 {
    padding-right: 9rem !important
}

.pb-9,.py-9 {
    padding-bottom: 9rem !important
}

.pl-9,.px-9 {
    padding-left: 9rem !important
}

.p-10 {
    padding: 10.5rem !important
}

.pt-10,.py-10 {
    padding-top: 10.5rem !important
}

.pr-10,.px-10 {
    padding-right: 10.5rem !important
}

.pb-10,.py-10 {
    padding-bottom: 10.5rem !important
}

.pl-10,.px-10 {
    padding-left: 10.5rem !important
}

.m-n1 {
    margin: -0.25rem !important
}

.mt-n1,.my-n1 {
    margin-top: -0.25rem !important
}

.mr-n1,.mx-n1 {
    margin-right: -0.25rem !important
}

.mb-n1,.my-n1 {
    margin-bottom: -0.25rem !important
}

.ml-n1,.mx-n1 {
    margin-left: -0.25rem !important
}

.m-n2 {
    margin: -0.5rem !important
}

.mt-n2,.my-n2 {
    margin-top: -0.5rem !important
}

.mr-n2,.mx-n2 {
    margin-right: -0.5rem !important
}

.mb-n2,.my-n2 {
    margin-bottom: -0.5rem !important
}

.ml-n2,.mx-n2 {
    margin-left: -0.5rem !important
}

.m-n3 {
    margin: -1rem !important
}

.mt-n3,.my-n3 {
    margin-top: -1rem !important
}

.mr-n3,.mx-n3 {
    margin-right: -1rem !important
}

.mb-n3,.my-n3 {
    margin-bottom: -1rem !important
}

.ml-n3,.mx-n3 {
    margin-left: -1rem !important
}

.m-n4 {
    margin: -1.5rem !important
}

.mt-n4,.my-n4 {
    margin-top: -1.5rem !important
}

.mr-n4,.mx-n4 {
    margin-right: -1.5rem !important
}

.mb-n4,.my-n4 {
    margin-bottom: -1.5rem !important
}

.ml-n4,.mx-n4 {
    margin-left: -1.5rem !important
}

.m-n5 {
    margin: -3rem !important
}

.mt-n5,.my-n5 {
    margin-top: -3rem !important
}

.mr-n5,.mx-n5 {
    margin-right: -3rem !important
}

.mb-n5,.my-n5 {
    margin-bottom: -3rem !important
}

.ml-n5,.mx-n5 {
    margin-left: -3rem !important
}

.m-n6 {
    margin: -4.5rem !important
}

.mt-n6,.my-n6 {
    margin-top: -4.5rem !important
}

.mr-n6,.mx-n6 {
    margin-right: -4.5rem !important
}

.mb-n6,.my-n6 {
    margin-bottom: -4.5rem !important
}

.ml-n6,.mx-n6 {
    margin-left: -4.5rem !important
}

.m-n7 {
    margin: -6rem !important
}

.mt-n7,.my-n7 {
    margin-top: -6rem !important
}

.mr-n7,.mx-n7 {
    margin-right: -6rem !important
}

.mb-n7,.my-n7 {
    margin-bottom: -6rem !important
}

.ml-n7,.mx-n7 {
    margin-left: -6rem !important
}

.m-n8 {
    margin: -7.5rem !important
}

.mt-n8,.my-n8 {
    margin-top: -7.5rem !important
}

.mr-n8,.mx-n8 {
    margin-right: -7.5rem !important
}

.mb-n8,.my-n8 {
    margin-bottom: -7.5rem !important
}

.ml-n8,.mx-n8 {
    margin-left: -7.5rem !important
}

.m-n9 {
    margin: -9rem !important
}

.mt-n9,.my-n9 {
    margin-top: -9rem !important
}

.mr-n9,.mx-n9 {
    margin-right: -9rem !important
}

.mb-n9,.my-n9 {
    margin-bottom: -9rem !important
}

.ml-n9,.mx-n9 {
    margin-left: -9rem !important
}

.m-n10 {
    margin: -10.5rem !important
}

.mt-n10,.my-n10 {
    margin-top: -10.5rem !important
}

.mr-n10,.mx-n10 {
    margin-right: -10.5rem !important
}

.mb-n10,.my-n10 {
    margin-bottom: -10.5rem !important
}

.ml-n10,.mx-n10 {
    margin-left: -10.5rem !important
}

.m-auto {
    margin: auto !important
}

.mt-auto,.my-auto {
    margin-top: auto !important
}

.mr-auto,.mx-auto {
    margin-right: auto !important
}

.mb-auto,.my-auto {
    margin-bottom: auto !important
}

.ml-auto,.mx-auto {
    margin-left: auto !important
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin:0 !important
    }

    .mt-sm-0,.my-sm-0 {
        margin-top: 0 !important
    }

    .mr-sm-0,.mx-sm-0 {
        margin-right: 0 !important
    }

    .mb-sm-0,.my-sm-0 {
        margin-bottom: 0 !important
    }

    .ml-sm-0,.mx-sm-0 {
        margin-left: 0 !important
    }

    .m-sm-1 {
        margin: 0.25rem !important
    }

    .mt-sm-1,.my-sm-1 {
        margin-top: 0.25rem !important
    }

    .mr-sm-1,.mx-sm-1 {
        margin-right: 0.25rem !important
    }

    .mb-sm-1,.my-sm-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-sm-1,.mx-sm-1 {
        margin-left: 0.25rem !important
    }

    .m-sm-2 {
        margin: 0.5rem !important
    }

    .mt-sm-2,.my-sm-2 {
        margin-top: 0.5rem !important
    }

    .mr-sm-2,.mx-sm-2 {
        margin-right: 0.5rem !important
    }

    .mb-sm-2,.my-sm-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-sm-2,.mx-sm-2 {
        margin-left: 0.5rem !important
    }

    .m-sm-3 {
        margin: 1rem !important
    }

    .mt-sm-3,.my-sm-3 {
        margin-top: 1rem !important
    }

    .mr-sm-3,.mx-sm-3 {
        margin-right: 1rem !important
    }

    .mb-sm-3,.my-sm-3 {
        margin-bottom: 1rem !important
    }

    .ml-sm-3,.mx-sm-3 {
        margin-left: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .mt-sm-4,.my-sm-4 {
        margin-top: 1.5rem !important
    }

    .mr-sm-4,.mx-sm-4 {
        margin-right: 1.5rem !important
    }

    .mb-sm-4,.my-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-sm-4,.mx-sm-4 {
        margin-left: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .mt-sm-5,.my-sm-5 {
        margin-top: 3rem !important
    }

    .mr-sm-5,.mx-sm-5 {
        margin-right: 3rem !important
    }

    .mb-sm-5,.my-sm-5 {
        margin-bottom: 3rem !important
    }

    .ml-sm-5,.mx-sm-5 {
        margin-left: 3rem !important
    }

    .m-sm-6 {
        margin: 4.5rem !important
    }

    .mt-sm-6,.my-sm-6 {
        margin-top: 4.5rem !important
    }

    .mr-sm-6,.mx-sm-6 {
        margin-right: 4.5rem !important
    }

    .mb-sm-6,.my-sm-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-sm-6,.mx-sm-6 {
        margin-left: 4.5rem !important
    }

    .m-sm-7 {
        margin: 6rem !important
    }

    .mt-sm-7,.my-sm-7 {
        margin-top: 6rem !important
    }

    .mr-sm-7,.mx-sm-7 {
        margin-right: 6rem !important
    }

    .mb-sm-7,.my-sm-7 {
        margin-bottom: 6rem !important
    }

    .ml-sm-7,.mx-sm-7 {
        margin-left: 6rem !important
    }

    .m-sm-8 {
        margin: 7.5rem !important
    }

    .mt-sm-8,.my-sm-8 {
        margin-top: 7.5rem !important
    }

    .mr-sm-8,.mx-sm-8 {
        margin-right: 7.5rem !important
    }

    .mb-sm-8,.my-sm-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-sm-8,.mx-sm-8 {
        margin-left: 7.5rem !important
    }

    .m-sm-9 {
        margin: 9rem !important
    }

    .mt-sm-9,.my-sm-9 {
        margin-top: 9rem !important
    }

    .mr-sm-9,.mx-sm-9 {
        margin-right: 9rem !important
    }

    .mb-sm-9,.my-sm-9 {
        margin-bottom: 9rem !important
    }

    .ml-sm-9,.mx-sm-9 {
        margin-left: 9rem !important
    }

    .m-sm-10 {
        margin: 10.5rem !important
    }

    .mt-sm-10,.my-sm-10 {
        margin-top: 10.5rem !important
    }

    .mr-sm-10,.mx-sm-10 {
        margin-right: 10.5rem !important
    }

    .mb-sm-10,.my-sm-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-sm-10,.mx-sm-10 {
        margin-left: 10.5rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .pt-sm-0,.py-sm-0 {
        padding-top: 0 !important
    }

    .pr-sm-0,.px-sm-0 {
        padding-right: 0 !important
    }

    .pb-sm-0,.py-sm-0 {
        padding-bottom: 0 !important
    }

    .pl-sm-0,.px-sm-0 {
        padding-left: 0 !important
    }

    .p-sm-1 {
        padding: 0.25rem !important
    }

    .pt-sm-1,.py-sm-1 {
        padding-top: 0.25rem !important
    }

    .pr-sm-1,.px-sm-1 {
        padding-right: 0.25rem !important
    }

    .pb-sm-1,.py-sm-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-sm-1,.px-sm-1 {
        padding-left: 0.25rem !important
    }

    .p-sm-2 {
        padding: 0.5rem !important
    }

    .pt-sm-2,.py-sm-2 {
        padding-top: 0.5rem !important
    }

    .pr-sm-2,.px-sm-2 {
        padding-right: 0.5rem !important
    }

    .pb-sm-2,.py-sm-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-sm-2,.px-sm-2 {
        padding-left: 0.5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .pt-sm-3,.py-sm-3 {
        padding-top: 1rem !important
    }

    .pr-sm-3,.px-sm-3 {
        padding-right: 1rem !important
    }

    .pb-sm-3,.py-sm-3 {
        padding-bottom: 1rem !important
    }

    .pl-sm-3,.px-sm-3 {
        padding-left: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .pt-sm-4,.py-sm-4 {
        padding-top: 1.5rem !important
    }

    .pr-sm-4,.px-sm-4 {
        padding-right: 1.5rem !important
    }

    .pb-sm-4,.py-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-sm-4,.px-sm-4 {
        padding-left: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .pt-sm-5,.py-sm-5 {
        padding-top: 3rem !important
    }

    .pr-sm-5,.px-sm-5 {
        padding-right: 3rem !important
    }

    .pb-sm-5,.py-sm-5 {
        padding-bottom: 3rem !important
    }

    .pl-sm-5,.px-sm-5 {
        padding-left: 3rem !important
    }

    .p-sm-6 {
        padding: 4.5rem !important
    }

    .pt-sm-6,.py-sm-6 {
        padding-top: 4.5rem !important
    }

    .pr-sm-6,.px-sm-6 {
        padding-right: 4.5rem !important
    }

    .pb-sm-6,.py-sm-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-sm-6,.px-sm-6 {
        padding-left: 4.5rem !important
    }

    .p-sm-7 {
        padding: 6rem !important
    }

    .pt-sm-7,.py-sm-7 {
        padding-top: 6rem !important
    }

    .pr-sm-7,.px-sm-7 {
        padding-right: 6rem !important
    }

    .pb-sm-7,.py-sm-7 {
        padding-bottom: 6rem !important
    }

    .pl-sm-7,.px-sm-7 {
        padding-left: 6rem !important
    }

    .p-sm-8 {
        padding: 7.5rem !important
    }

    .pt-sm-8,.py-sm-8 {
        padding-top: 7.5rem !important
    }

    .pr-sm-8,.px-sm-8 {
        padding-right: 7.5rem !important
    }

    .pb-sm-8,.py-sm-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-sm-8,.px-sm-8 {
        padding-left: 7.5rem !important
    }

    .p-sm-9 {
        padding: 9rem !important
    }

    .pt-sm-9,.py-sm-9 {
        padding-top: 9rem !important
    }

    .pr-sm-9,.px-sm-9 {
        padding-right: 9rem !important
    }

    .pb-sm-9,.py-sm-9 {
        padding-bottom: 9rem !important
    }

    .pl-sm-9,.px-sm-9 {
        padding-left: 9rem !important
    }

    .p-sm-10 {
        padding: 10.5rem !important
    }

    .pt-sm-10,.py-sm-10 {
        padding-top: 10.5rem !important
    }

    .pr-sm-10,.px-sm-10 {
        padding-right: 10.5rem !important
    }

    .pb-sm-10,.py-sm-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-sm-10,.px-sm-10 {
        padding-left: 10.5rem !important
    }

    .m-sm-n1 {
        margin: -0.25rem !important
    }

    .mt-sm-n1,.my-sm-n1 {
        margin-top: -0.25rem !important
    }

    .mr-sm-n1,.mx-sm-n1 {
        margin-right: -0.25rem !important
    }

    .mb-sm-n1,.my-sm-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-sm-n1,.mx-sm-n1 {
        margin-left: -0.25rem !important
    }

    .m-sm-n2 {
        margin: -0.5rem !important
    }

    .mt-sm-n2,.my-sm-n2 {
        margin-top: -0.5rem !important
    }

    .mr-sm-n2,.mx-sm-n2 {
        margin-right: -0.5rem !important
    }

    .mb-sm-n2,.my-sm-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-sm-n2,.mx-sm-n2 {
        margin-left: -0.5rem !important
    }

    .m-sm-n3 {
        margin: -1rem !important
    }

    .mt-sm-n3,.my-sm-n3 {
        margin-top: -1rem !important
    }

    .mr-sm-n3,.mx-sm-n3 {
        margin-right: -1rem !important
    }

    .mb-sm-n3,.my-sm-n3 {
        margin-bottom: -1rem !important
    }

    .ml-sm-n3,.mx-sm-n3 {
        margin-left: -1rem !important
    }

    .m-sm-n4 {
        margin: -1.5rem !important
    }

    .mt-sm-n4,.my-sm-n4 {
        margin-top: -1.5rem !important
    }

    .mr-sm-n4,.mx-sm-n4 {
        margin-right: -1.5rem !important
    }

    .mb-sm-n4,.my-sm-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-sm-n4,.mx-sm-n4 {
        margin-left: -1.5rem !important
    }

    .m-sm-n5 {
        margin: -3rem !important
    }

    .mt-sm-n5,.my-sm-n5 {
        margin-top: -3rem !important
    }

    .mr-sm-n5,.mx-sm-n5 {
        margin-right: -3rem !important
    }

    .mb-sm-n5,.my-sm-n5 {
        margin-bottom: -3rem !important
    }

    .ml-sm-n5,.mx-sm-n5 {
        margin-left: -3rem !important
    }

    .m-sm-n6 {
        margin: -4.5rem !important
    }

    .mt-sm-n6,.my-sm-n6 {
        margin-top: -4.5rem !important
    }

    .mr-sm-n6,.mx-sm-n6 {
        margin-right: -4.5rem !important
    }

    .mb-sm-n6,.my-sm-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-sm-n6,.mx-sm-n6 {
        margin-left: -4.5rem !important
    }

    .m-sm-n7 {
        margin: -6rem !important
    }

    .mt-sm-n7,.my-sm-n7 {
        margin-top: -6rem !important
    }

    .mr-sm-n7,.mx-sm-n7 {
        margin-right: -6rem !important
    }

    .mb-sm-n7,.my-sm-n7 {
        margin-bottom: -6rem !important
    }

    .ml-sm-n7,.mx-sm-n7 {
        margin-left: -6rem !important
    }

    .m-sm-n8 {
        margin: -7.5rem !important
    }

    .mt-sm-n8,.my-sm-n8 {
        margin-top: -7.5rem !important
    }

    .mr-sm-n8,.mx-sm-n8 {
        margin-right: -7.5rem !important
    }

    .mb-sm-n8,.my-sm-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-sm-n8,.mx-sm-n8 {
        margin-left: -7.5rem !important
    }

    .m-sm-n9 {
        margin: -9rem !important
    }

    .mt-sm-n9,.my-sm-n9 {
        margin-top: -9rem !important
    }

    .mr-sm-n9,.mx-sm-n9 {
        margin-right: -9rem !important
    }

    .mb-sm-n9,.my-sm-n9 {
        margin-bottom: -9rem !important
    }

    .ml-sm-n9,.mx-sm-n9 {
        margin-left: -9rem !important
    }

    .m-sm-n10 {
        margin: -10.5rem !important
    }

    .mt-sm-n10,.my-sm-n10 {
        margin-top: -10.5rem !important
    }

    .mr-sm-n10,.mx-sm-n10 {
        margin-right: -10.5rem !important
    }

    .mb-sm-n10,.my-sm-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-sm-n10,.mx-sm-n10 {
        margin-left: -10.5rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mt-sm-auto,.my-sm-auto {
        margin-top: auto !important
    }

    .mr-sm-auto,.mx-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-auto,.my-sm-auto {
        margin-bottom: auto !important
    }

    .ml-sm-auto,.mx-sm-auto {
        margin-left: auto !important
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin:0 !important
    }

    .mt-md-0,.my-md-0 {
        margin-top: 0 !important
    }

    .mr-md-0,.mx-md-0 {
        margin-right: 0 !important
    }

    .mb-md-0,.my-md-0 {
        margin-bottom: 0 !important
    }

    .ml-md-0,.mx-md-0 {
        margin-left: 0 !important
    }

    .m-md-1 {
        margin: 0.25rem !important
    }

    .mt-md-1,.my-md-1 {
        margin-top: 0.25rem !important
    }

    .mr-md-1,.mx-md-1 {
        margin-right: 0.25rem !important
    }

    .mb-md-1,.my-md-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-md-1,.mx-md-1 {
        margin-left: 0.25rem !important
    }

    .m-md-2 {
        margin: 0.5rem !important
    }

    .mt-md-2,.my-md-2 {
        margin-top: 0.5rem !important
    }

    .mr-md-2,.mx-md-2 {
        margin-right: 0.5rem !important
    }

    .mb-md-2,.my-md-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-md-2,.mx-md-2 {
        margin-left: 0.5rem !important
    }

    .m-md-3 {
        margin: 1rem !important
    }

    .mt-md-3,.my-md-3 {
        margin-top: 1rem !important
    }

    .mr-md-3,.mx-md-3 {
        margin-right: 1rem !important
    }

    .mb-md-3,.my-md-3 {
        margin-bottom: 1rem !important
    }

    .ml-md-3,.mx-md-3 {
        margin-left: 1rem !important
    }

    .m-md-4 {
        margin: 1.5rem !important
    }

    .mt-md-4,.my-md-4 {
        margin-top: 1.5rem !important
    }

    .mr-md-4,.mx-md-4 {
        margin-right: 1.5rem !important
    }

    .mb-md-4,.my-md-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-md-4,.mx-md-4 {
        margin-left: 1.5rem !important
    }

    .m-md-5 {
        margin: 3rem !important
    }

    .mt-md-5,.my-md-5 {
        margin-top: 3rem !important
    }

    .mr-md-5,.mx-md-5 {
        margin-right: 3rem !important
    }

    .mb-md-5,.my-md-5 {
        margin-bottom: 3rem !important
    }

    .ml-md-5,.mx-md-5 {
        margin-left: 3rem !important
    }

    .m-md-6 {
        margin: 4.5rem !important
    }

    .mt-md-6,.my-md-6 {
        margin-top: 4.5rem !important
    }

    .mr-md-6,.mx-md-6 {
        margin-right: 4.5rem !important
    }

    .mb-md-6,.my-md-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-md-6,.mx-md-6 {
        margin-left: 4.5rem !important
    }

    .m-md-7 {
        margin: 6rem !important
    }

    .mt-md-7,.my-md-7 {
        margin-top: 6rem !important
    }

    .mr-md-7,.mx-md-7 {
        margin-right: 6rem !important
    }

    .mb-md-7,.my-md-7 {
        margin-bottom: 6rem !important
    }

    .ml-md-7,.mx-md-7 {
        margin-left: 6rem !important
    }

    .m-md-8 {
        margin: 7.5rem !important
    }

    .mt-md-8,.my-md-8 {
        margin-top: 7.5rem !important
    }

    .mr-md-8,.mx-md-8 {
        margin-right: 7.5rem !important
    }

    .mb-md-8,.my-md-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-md-8,.mx-md-8 {
        margin-left: 7.5rem !important
    }

    .m-md-9 {
        margin: 9rem !important
    }

    .mt-md-9,.my-md-9 {
        margin-top: 9rem !important
    }

    .mr-md-9,.mx-md-9 {
        margin-right: 9rem !important
    }

    .mb-md-9,.my-md-9 {
        margin-bottom: 9rem !important
    }

    .ml-md-9,.mx-md-9 {
        margin-left: 9rem !important
    }

    .m-md-10 {
        margin: 10.5rem !important
    }

    .mt-md-10,.my-md-10 {
        margin-top: 10.5rem !important
    }

    .mr-md-10,.mx-md-10 {
        margin-right: 10.5rem !important
    }

    .mb-md-10,.my-md-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-md-10,.mx-md-10 {
        margin-left: 10.5rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .pt-md-0,.py-md-0 {
        padding-top: 0 !important
    }

    .pr-md-0,.px-md-0 {
        padding-right: 0 !important
    }

    .pb-md-0,.py-md-0 {
        padding-bottom: 0 !important
    }

    .pl-md-0,.px-md-0 {
        padding-left: 0 !important
    }

    .p-md-1 {
        padding: 0.25rem !important
    }

    .pt-md-1,.py-md-1 {
        padding-top: 0.25rem !important
    }

    .pr-md-1,.px-md-1 {
        padding-right: 0.25rem !important
    }

    .pb-md-1,.py-md-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-md-1,.px-md-1 {
        padding-left: 0.25rem !important
    }

    .p-md-2 {
        padding: 0.5rem !important
    }

    .pt-md-2,.py-md-2 {
        padding-top: 0.5rem !important
    }

    .pr-md-2,.px-md-2 {
        padding-right: 0.5rem !important
    }

    .pb-md-2,.py-md-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-md-2,.px-md-2 {
        padding-left: 0.5rem !important
    }

    .p-md-3 {
        padding: 1rem !important
    }

    .pt-md-3,.py-md-3 {
        padding-top: 1rem !important
    }

    .pr-md-3,.px-md-3 {
        padding-right: 1rem !important
    }

    .pb-md-3,.py-md-3 {
        padding-bottom: 1rem !important
    }

    .pl-md-3,.px-md-3 {
        padding-left: 1rem !important
    }

    .p-md-4 {
        padding: 1.5rem !important
    }

    .pt-md-4,.py-md-4 {
        padding-top: 1.5rem !important
    }

    .pr-md-4,.px-md-4 {
        padding-right: 1.5rem !important
    }

    .pb-md-4,.py-md-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-md-4,.px-md-4 {
        padding-left: 1.5rem !important
    }

    .p-md-5 {
        padding: 3rem !important
    }

    .pt-md-5,.py-md-5 {
        padding-top: 3rem !important
    }

    .pr-md-5,.px-md-5 {
        padding-right: 3rem !important
    }

    .pb-md-5,.py-md-5 {
        padding-bottom: 3rem !important
    }

    .pl-md-5,.px-md-5 {
        padding-left: 3rem !important
    }

    .p-md-6 {
        padding: 4.5rem !important
    }

    .pt-md-6,.py-md-6 {
        padding-top: 4.5rem !important
    }

    .pr-md-6,.px-md-6 {
        padding-right: 4.5rem !important
    }

    .pb-md-6,.py-md-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-md-6,.px-md-6 {
        padding-left: 4.5rem !important
    }

    .p-md-7 {
        padding: 6rem !important
    }

    .pt-md-7,.py-md-7 {
        padding-top: 6rem !important
    }

    .pr-md-7,.px-md-7 {
        padding-right: 6rem !important
    }

    .pb-md-7,.py-md-7 {
        padding-bottom: 6rem !important
    }

    .pl-md-7,.px-md-7 {
        padding-left: 6rem !important
    }

    .p-md-8 {
        padding: 7.5rem !important
    }

    .pt-md-8,.py-md-8 {
        padding-top: 7.5rem !important
    }

    .pr-md-8,.px-md-8 {
        padding-right: 7.5rem !important
    }

    .pb-md-8,.py-md-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-md-8,.px-md-8 {
        padding-left: 7.5rem !important
    }

    .p-md-9 {
        padding: 9rem !important
    }

    .pt-md-9,.py-md-9 {
        padding-top: 9rem !important
    }

    .pr-md-9,.px-md-9 {
        padding-right: 9rem !important
    }

    .pb-md-9,.py-md-9 {
        padding-bottom: 9rem !important
    }

    .pl-md-9,.px-md-9 {
        padding-left: 9rem !important
    }

    .p-md-10 {
        padding: 10.5rem !important
    }

    .pt-md-10,.py-md-10 {
        padding-top: 10.5rem !important
    }

    .pr-md-10,.px-md-10 {
        padding-right: 10.5rem !important
    }

    .pb-md-10,.py-md-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-md-10,.px-md-10 {
        padding-left: 10.5rem !important
    }

    .m-md-n1 {
        margin: -0.25rem !important
    }

    .mt-md-n1,.my-md-n1 {
        margin-top: -0.25rem !important
    }

    .mr-md-n1,.mx-md-n1 {
        margin-right: -0.25rem !important
    }

    .mb-md-n1,.my-md-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-md-n1,.mx-md-n1 {
        margin-left: -0.25rem !important
    }

    .m-md-n2 {
        margin: -0.5rem !important
    }

    .mt-md-n2,.my-md-n2 {
        margin-top: -0.5rem !important
    }

    .mr-md-n2,.mx-md-n2 {
        margin-right: -0.5rem !important
    }

    .mb-md-n2,.my-md-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-md-n2,.mx-md-n2 {
        margin-left: -0.5rem !important
    }

    .m-md-n3 {
        margin: -1rem !important
    }

    .mt-md-n3,.my-md-n3 {
        margin-top: -1rem !important
    }

    .mr-md-n3,.mx-md-n3 {
        margin-right: -1rem !important
    }

    .mb-md-n3,.my-md-n3 {
        margin-bottom: -1rem !important
    }

    .ml-md-n3,.mx-md-n3 {
        margin-left: -1rem !important
    }

    .m-md-n4 {
        margin: -1.5rem !important
    }

    .mt-md-n4,.my-md-n4 {
        margin-top: -1.5rem !important
    }

    .mr-md-n4,.mx-md-n4 {
        margin-right: -1.5rem !important
    }

    .mb-md-n4,.my-md-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-md-n4,.mx-md-n4 {
        margin-left: -1.5rem !important
    }

    .m-md-n5 {
        margin: -3rem !important
    }

    .mt-md-n5,.my-md-n5 {
        margin-top: -3rem !important
    }

    .mr-md-n5,.mx-md-n5 {
        margin-right: -3rem !important
    }

    .mb-md-n5,.my-md-n5 {
        margin-bottom: -3rem !important
    }

    .ml-md-n5,.mx-md-n5 {
        margin-left: -3rem !important
    }

    .m-md-n6 {
        margin: -4.5rem !important
    }

    .mt-md-n6,.my-md-n6 {
        margin-top: -4.5rem !important
    }

    .mr-md-n6,.mx-md-n6 {
        margin-right: -4.5rem !important
    }

    .mb-md-n6,.my-md-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-md-n6,.mx-md-n6 {
        margin-left: -4.5rem !important
    }

    .m-md-n7 {
        margin: -6rem !important
    }

    .mt-md-n7,.my-md-n7 {
        margin-top: -6rem !important
    }

    .mr-md-n7,.mx-md-n7 {
        margin-right: -6rem !important
    }

    .mb-md-n7,.my-md-n7 {
        margin-bottom: -6rem !important
    }

    .ml-md-n7,.mx-md-n7 {
        margin-left: -6rem !important
    }

    .m-md-n8 {
        margin: -7.5rem !important
    }

    .mt-md-n8,.my-md-n8 {
        margin-top: -7.5rem !important
    }

    .mr-md-n8,.mx-md-n8 {
        margin-right: -7.5rem !important
    }

    .mb-md-n8,.my-md-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-md-n8,.mx-md-n8 {
        margin-left: -7.5rem !important
    }

    .m-md-n9 {
        margin: -9rem !important
    }

    .mt-md-n9,.my-md-n9 {
        margin-top: -9rem !important
    }

    .mr-md-n9,.mx-md-n9 {
        margin-right: -9rem !important
    }

    .mb-md-n9,.my-md-n9 {
        margin-bottom: -9rem !important
    }

    .ml-md-n9,.mx-md-n9 {
        margin-left: -9rem !important
    }

    .m-md-n10 {
        margin: -10.5rem !important
    }

    .mt-md-n10,.my-md-n10 {
        margin-top: -10.5rem !important
    }

    .mr-md-n10,.mx-md-n10 {
        margin-right: -10.5rem !important
    }

    .mb-md-n10,.my-md-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-md-n10,.mx-md-n10 {
        margin-left: -10.5rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mt-md-auto,.my-md-auto {
        margin-top: auto !important
    }

    .mr-md-auto,.mx-md-auto {
        margin-right: auto !important
    }

    .mb-md-auto,.my-md-auto {
        margin-bottom: auto !important
    }

    .ml-md-auto,.mx-md-auto {
        margin-left: auto !important
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin:0 !important
    }

    .mt-lg-0,.my-lg-0 {
        margin-top: 0 !important
    }

    .mr-lg-0,.mx-lg-0 {
        margin-right: 0 !important
    }

    .mb-lg-0,.my-lg-0 {
        margin-bottom: 0 !important
    }

    .ml-lg-0,.mx-lg-0 {
        margin-left: 0 !important
    }

    .m-lg-1 {
        margin: 0.25rem !important
    }

    .mt-lg-1,.my-lg-1 {
        margin-top: 0.25rem !important
    }

    .mr-lg-1,.mx-lg-1 {
        margin-right: 0.25rem !important
    }

    .mb-lg-1,.my-lg-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-lg-1,.mx-lg-1 {
        margin-left: 0.25rem !important
    }

    .m-lg-2 {
        margin: 0.5rem !important
    }

    .mt-lg-2,.my-lg-2 {
        margin-top: 0.5rem !important
    }

    .mr-lg-2,.mx-lg-2 {
        margin-right: 0.5rem !important
    }

    .mb-lg-2,.my-lg-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-lg-2,.mx-lg-2 {
        margin-left: 0.5rem !important
    }

    .m-lg-3 {
        margin: 1rem !important
    }

    .mt-lg-3,.my-lg-3 {
        margin-top: 1rem !important
    }

    .mr-lg-3,.mx-lg-3 {
        margin-right: 1rem !important
    }

    .mb-lg-3,.my-lg-3 {
        margin-bottom: 1rem !important
    }

    .ml-lg-3,.mx-lg-3 {
        margin-left: 1rem !important
    }

    .m-lg-4 {
        margin: 1.5rem !important
    }

    .mt-lg-4,.my-lg-4 {
        margin-top: 1.5rem !important
    }

    .mr-lg-4,.mx-lg-4 {
        margin-right: 1.5rem !important
    }

    .mb-lg-4,.my-lg-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-lg-4,.mx-lg-4 {
        margin-left: 1.5rem !important
    }

    .m-lg-5 {
        margin: 3rem !important
    }

    .mt-lg-5,.my-lg-5 {
        margin-top: 3rem !important
    }

    .mr-lg-5,.mx-lg-5 {
        margin-right: 3rem !important
    }

    .mb-lg-5,.my-lg-5 {
        margin-bottom: 3rem !important
    }

    .ml-lg-5,.mx-lg-5 {
        margin-left: 3rem !important
    }

    .m-lg-6 {
        margin: 4.5rem !important
    }

    .mt-lg-6,.my-lg-6 {
        margin-top: 4.5rem !important
    }

    .mr-lg-6,.mx-lg-6 {
        margin-right: 4.5rem !important
    }

    .mb-lg-6,.my-lg-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-lg-6,.mx-lg-6 {
        margin-left: 4.5rem !important
    }

    .m-lg-7 {
        margin: 6rem !important
    }

    .mt-lg-7,.my-lg-7 {
        margin-top: 6rem !important
    }

    .mr-lg-7,.mx-lg-7 {
        margin-right: 6rem !important
    }

    .mb-lg-7,.my-lg-7 {
        margin-bottom: 6rem !important
    }

    .ml-lg-7,.mx-lg-7 {
        margin-left: 6rem !important
    }

    .m-lg-8 {
        margin: 7.5rem !important
    }

    .mt-lg-8,.my-lg-8 {
        margin-top: 7.5rem !important
    }

    .mr-lg-8,.mx-lg-8 {
        margin-right: 7.5rem !important
    }

    .mb-lg-8,.my-lg-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-lg-8,.mx-lg-8 {
        margin-left: 7.5rem !important
    }

    .m-lg-9 {
        margin: 9rem !important
    }

    .mt-lg-9,.my-lg-9 {
        margin-top: 9rem !important
    }

    .mr-lg-9,.mx-lg-9 {
        margin-right: 9rem !important
    }

    .mb-lg-9,.my-lg-9 {
        margin-bottom: 9rem !important
    }

    .ml-lg-9,.mx-lg-9 {
        margin-left: 9rem !important
    }

    .m-lg-10 {
        margin: 10.5rem !important
    }

    .mt-lg-10,.my-lg-10 {
        margin-top: 10.5rem !important
    }

    .mr-lg-10,.mx-lg-10 {
        margin-right: 10.5rem !important
    }

    .mb-lg-10,.my-lg-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-lg-10,.mx-lg-10 {
        margin-left: 10.5rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .pt-lg-0,.py-lg-0 {
        padding-top: 0 !important
    }

    .pr-lg-0,.px-lg-0 {
        padding-right: 0 !important
    }

    .pb-lg-0,.py-lg-0 {
        padding-bottom: 0 !important
    }

    .pl-lg-0,.px-lg-0 {
        padding-left: 0 !important
    }

    .p-lg-1 {
        padding: 0.25rem !important
    }

    .pt-lg-1,.py-lg-1 {
        padding-top: 0.25rem !important
    }

    .pr-lg-1,.px-lg-1 {
        padding-right: 0.25rem !important
    }

    .pb-lg-1,.py-lg-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-lg-1,.px-lg-1 {
        padding-left: 0.25rem !important
    }

    .p-lg-2 {
        padding: 0.5rem !important
    }

    .pt-lg-2,.py-lg-2 {
        padding-top: 0.5rem !important
    }

    .pr-lg-2,.px-lg-2 {
        padding-right: 0.5rem !important
    }

    .pb-lg-2,.py-lg-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-lg-2,.px-lg-2 {
        padding-left: 0.5rem !important
    }

    .p-lg-3 {
        padding: 1rem !important
    }

    .pt-lg-3,.py-lg-3 {
        padding-top: 1rem !important
    }

    .pr-lg-3,.px-lg-3 {
        padding-right: 1rem !important
    }

    .pb-lg-3,.py-lg-3 {
        padding-bottom: 1rem !important
    }

    .pl-lg-3,.px-lg-3 {
        padding-left: 1rem !important
    }

    .p-lg-4 {
        padding: 1.5rem !important
    }

    .pt-lg-4,.py-lg-4 {
        padding-top: 1.5rem !important
    }

    .pr-lg-4,.px-lg-4 {
        padding-right: 1.5rem !important
    }

    .pb-lg-4,.py-lg-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-lg-4,.px-lg-4 {
        padding-left: 1.5rem !important
    }

    .p-lg-5 {
        padding: 3rem !important
    }

    .pt-lg-5,.py-lg-5 {
        padding-top: 3rem !important
    }

    .pr-lg-5,.px-lg-5 {
        padding-right: 3rem !important
    }

    .pb-lg-5,.py-lg-5 {
        padding-bottom: 3rem !important
    }

    .pl-lg-5,.px-lg-5 {
        padding-left: 3rem !important
    }

    .p-lg-6 {
        padding: 4.5rem !important
    }

    .pt-lg-6,.py-lg-6 {
        padding-top: 4.5rem !important
    }

    .pr-lg-6,.px-lg-6 {
        padding-right: 4.5rem !important
    }

    .pb-lg-6,.py-lg-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-lg-6,.px-lg-6 {
        padding-left: 4.5rem !important
    }

    .p-lg-7 {
        padding: 6rem !important
    }

    .pt-lg-7,.py-lg-7 {
        padding-top: 6rem !important
    }

    .pr-lg-7,.px-lg-7 {
        padding-right: 6rem !important
    }

    .pb-lg-7,.py-lg-7 {
        padding-bottom: 6rem !important
    }

    .pl-lg-7,.px-lg-7 {
        padding-left: 6rem !important
    }

    .p-lg-8 {
        padding: 7.5rem !important
    }

    .pt-lg-8,.py-lg-8 {
        padding-top: 7.5rem !important
    }

    .pr-lg-8,.px-lg-8 {
        padding-right: 7.5rem !important
    }

    .pb-lg-8,.py-lg-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-lg-8,.px-lg-8 {
        padding-left: 7.5rem !important
    }

    .p-lg-9 {
        padding: 9rem !important
    }

    .pt-lg-9,.py-lg-9 {
        padding-top: 9rem !important
    }

    .pr-lg-9,.px-lg-9 {
        padding-right: 9rem !important
    }

    .pb-lg-9,.py-lg-9 {
        padding-bottom: 9rem !important
    }

    .pl-lg-9,.px-lg-9 {
        padding-left: 9rem !important
    }

    .p-lg-10 {
        padding: 10.5rem !important
    }

    .pt-lg-10,.py-lg-10 {
        padding-top: 10.5rem !important
    }

    .pr-lg-10,.px-lg-10 {
        padding-right: 10.5rem !important
    }

    .pb-lg-10,.py-lg-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-lg-10,.px-lg-10 {
        padding-left: 10.5rem !important
    }

    .m-lg-n1 {
        margin: -0.25rem !important
    }

    .mt-lg-n1,.my-lg-n1 {
        margin-top: -0.25rem !important
    }

    .mr-lg-n1,.mx-lg-n1 {
        margin-right: -0.25rem !important
    }

    .mb-lg-n1,.my-lg-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-lg-n1,.mx-lg-n1 {
        margin-left: -0.25rem !important
    }

    .m-lg-n2 {
        margin: -0.5rem !important
    }

    .mt-lg-n2,.my-lg-n2 {
        margin-top: -0.5rem !important
    }

    .mr-lg-n2,.mx-lg-n2 {
        margin-right: -0.5rem !important
    }

    .mb-lg-n2,.my-lg-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-lg-n2,.mx-lg-n2 {
        margin-left: -0.5rem !important
    }

    .m-lg-n3 {
        margin: -1rem !important
    }

    .mt-lg-n3,.my-lg-n3 {
        margin-top: -1rem !important
    }

    .mr-lg-n3,.mx-lg-n3 {
        margin-right: -1rem !important
    }

    .mb-lg-n3,.my-lg-n3 {
        margin-bottom: -1rem !important
    }

    .ml-lg-n3,.mx-lg-n3 {
        margin-left: -1rem !important
    }

    .m-lg-n4 {
        margin: -1.5rem !important
    }

    .mt-lg-n4,.my-lg-n4 {
        margin-top: -1.5rem !important
    }

    .mr-lg-n4,.mx-lg-n4 {
        margin-right: -1.5rem !important
    }

    .mb-lg-n4,.my-lg-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-lg-n4,.mx-lg-n4 {
        margin-left: -1.5rem !important
    }

    .m-lg-n5 {
        margin: -3rem !important
    }

    .mt-lg-n5,.my-lg-n5 {
        margin-top: -3rem !important
    }

    .mr-lg-n5,.mx-lg-n5 {
        margin-right: -3rem !important
    }

    .mb-lg-n5,.my-lg-n5 {
        margin-bottom: -3rem !important
    }

    .ml-lg-n5,.mx-lg-n5 {
        margin-left: -3rem !important
    }

    .m-lg-n6 {
        margin: -4.5rem !important
    }

    .mt-lg-n6,.my-lg-n6 {
        margin-top: -4.5rem !important
    }

    .mr-lg-n6,.mx-lg-n6 {
        margin-right: -4.5rem !important
    }

    .mb-lg-n6,.my-lg-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-lg-n6,.mx-lg-n6 {
        margin-left: -4.5rem !important
    }

    .m-lg-n7 {
        margin: -6rem !important
    }

    .mt-lg-n7,.my-lg-n7 {
        margin-top: -6rem !important
    }

    .mr-lg-n7,.mx-lg-n7 {
        margin-right: -6rem !important
    }

    .mb-lg-n7,.my-lg-n7 {
        margin-bottom: -6rem !important
    }

    .ml-lg-n7,.mx-lg-n7 {
        margin-left: -6rem !important
    }

    .m-lg-n8 {
        margin: -7.5rem !important
    }

    .mt-lg-n8,.my-lg-n8 {
        margin-top: -7.5rem !important
    }

    .mr-lg-n8,.mx-lg-n8 {
        margin-right: -7.5rem !important
    }

    .mb-lg-n8,.my-lg-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-lg-n8,.mx-lg-n8 {
        margin-left: -7.5rem !important
    }

    .m-lg-n9 {
        margin: -9rem !important
    }

    .mt-lg-n9,.my-lg-n9 {
        margin-top: -9rem !important
    }

    .mr-lg-n9,.mx-lg-n9 {
        margin-right: -9rem !important
    }

    .mb-lg-n9,.my-lg-n9 {
        margin-bottom: -9rem !important
    }

    .ml-lg-n9,.mx-lg-n9 {
        margin-left: -9rem !important
    }

    .m-lg-n10 {
        margin: -10.5rem !important
    }

    .mt-lg-n10,.my-lg-n10 {
        margin-top: -10.5rem !important
    }

    .mr-lg-n10,.mx-lg-n10 {
        margin-right: -10.5rem !important
    }

    .mb-lg-n10,.my-lg-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-lg-n10,.mx-lg-n10 {
        margin-left: -10.5rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mt-lg-auto,.my-lg-auto {
        margin-top: auto !important
    }

    .mr-lg-auto,.mx-lg-auto {
        margin-right: auto !important
    }

    .mb-lg-auto,.my-lg-auto {
        margin-bottom: auto !important
    }

    .ml-lg-auto,.mx-lg-auto {
        margin-left: auto !important
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin:0 !important
    }

    .mt-xl-0,.my-xl-0 {
        margin-top: 0 !important
    }

    .mr-xl-0,.mx-xl-0 {
        margin-right: 0 !important
    }

    .mb-xl-0,.my-xl-0 {
        margin-bottom: 0 !important
    }

    .ml-xl-0,.mx-xl-0 {
        margin-left: 0 !important
    }

    .m-xl-1 {
        margin: 0.25rem !important
    }

    .mt-xl-1,.my-xl-1 {
        margin-top: 0.25rem !important
    }

    .mr-xl-1,.mx-xl-1 {
        margin-right: 0.25rem !important
    }

    .mb-xl-1,.my-xl-1 {
        margin-bottom: 0.25rem !important
    }

    .ml-xl-1,.mx-xl-1 {
        margin-left: 0.25rem !important
    }

    .m-xl-2 {
        margin: 0.5rem !important
    }

    .mt-xl-2,.my-xl-2 {
        margin-top: 0.5rem !important
    }

    .mr-xl-2,.mx-xl-2 {
        margin-right: 0.5rem !important
    }

    .mb-xl-2,.my-xl-2 {
        margin-bottom: 0.5rem !important
    }

    .ml-xl-2,.mx-xl-2 {
        margin-left: 0.5rem !important
    }

    .m-xl-3 {
        margin: 1rem !important
    }

    .mt-xl-3,.my-xl-3 {
        margin-top: 1rem !important
    }

    .mr-xl-3,.mx-xl-3 {
        margin-right: 1rem !important
    }

    .mb-xl-3,.my-xl-3 {
        margin-bottom: 1rem !important
    }

    .ml-xl-3,.mx-xl-3 {
        margin-left: 1rem !important
    }

    .m-xl-4 {
        margin: 1.5rem !important
    }

    .mt-xl-4,.my-xl-4 {
        margin-top: 1.5rem !important
    }

    .mr-xl-4,.mx-xl-4 {
        margin-right: 1.5rem !important
    }

    .mb-xl-4,.my-xl-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-xl-4,.mx-xl-4 {
        margin-left: 1.5rem !important
    }

    .m-xl-5 {
        margin: 3rem !important
    }

    .mt-xl-5,.my-xl-5 {
        margin-top: 3rem !important
    }

    .mr-xl-5,.mx-xl-5 {
        margin-right: 3rem !important
    }

    .mb-xl-5,.my-xl-5 {
        margin-bottom: 3rem !important
    }

    .ml-xl-5,.mx-xl-5 {
        margin-left: 3rem !important
    }

    .m-xl-6 {
        margin: 4.5rem !important
    }

    .mt-xl-6,.my-xl-6 {
        margin-top: 4.5rem !important
    }

    .mr-xl-6,.mx-xl-6 {
        margin-right: 4.5rem !important
    }

    .mb-xl-6,.my-xl-6 {
        margin-bottom: 4.5rem !important
    }

    .ml-xl-6,.mx-xl-6 {
        margin-left: 4.5rem !important
    }

    .m-xl-7 {
        margin: 6rem !important
    }

    .mt-xl-7,.my-xl-7 {
        margin-top: 6rem !important
    }

    .mr-xl-7,.mx-xl-7 {
        margin-right: 6rem !important
    }

    .mb-xl-7,.my-xl-7 {
        margin-bottom: 6rem !important
    }

    .ml-xl-7,.mx-xl-7 {
        margin-left: 6rem !important
    }

    .m-xl-8 {
        margin: 7.5rem !important
    }

    .mt-xl-8,.my-xl-8 {
        margin-top: 7.5rem !important
    }

    .mr-xl-8,.mx-xl-8 {
        margin-right: 7.5rem !important
    }

    .mb-xl-8,.my-xl-8 {
        margin-bottom: 7.5rem !important
    }

    .ml-xl-8,.mx-xl-8 {
        margin-left: 7.5rem !important
    }

    .m-xl-9 {
        margin: 9rem !important
    }

    .mt-xl-9,.my-xl-9 {
        margin-top: 9rem !important
    }

    .mr-xl-9,.mx-xl-9 {
        margin-right: 9rem !important
    }

    .mb-xl-9,.my-xl-9 {
        margin-bottom: 9rem !important
    }

    .ml-xl-9,.mx-xl-9 {
        margin-left: 9rem !important
    }

    .m-xl-10 {
        margin: 10.5rem !important
    }

    .mt-xl-10,.my-xl-10 {
        margin-top: 10.5rem !important
    }

    .mr-xl-10,.mx-xl-10 {
        margin-right: 10.5rem !important
    }

    .mb-xl-10,.my-xl-10 {
        margin-bottom: 10.5rem !important
    }

    .ml-xl-10,.mx-xl-10 {
        margin-left: 10.5rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .pt-xl-0,.py-xl-0 {
        padding-top: 0 !important
    }

    .pr-xl-0,.px-xl-0 {
        padding-right: 0 !important
    }

    .pb-xl-0,.py-xl-0 {
        padding-bottom: 0 !important
    }

    .pl-xl-0,.px-xl-0 {
        padding-left: 0 !important
    }

    .p-xl-1 {
        padding: 0.25rem !important
    }

    .pt-xl-1,.py-xl-1 {
        padding-top: 0.25rem !important
    }

    .pr-xl-1,.px-xl-1 {
        padding-right: 0.25rem !important
    }

    .pb-xl-1,.py-xl-1 {
        padding-bottom: 0.25rem !important
    }

    .pl-xl-1,.px-xl-1 {
        padding-left: 0.25rem !important
    }

    .p-xl-2 {
        padding: 0.5rem !important
    }

    .pt-xl-2,.py-xl-2 {
        padding-top: 0.5rem !important
    }

    .pr-xl-2,.px-xl-2 {
        padding-right: 0.5rem !important
    }

    .pb-xl-2,.py-xl-2 {
        padding-bottom: 0.5rem !important
    }

    .pl-xl-2,.px-xl-2 {
        padding-left: 0.5rem !important
    }

    .p-xl-3 {
        padding: 1rem !important
    }

    .pt-xl-3,.py-xl-3 {
        padding-top: 1rem !important
    }

    .pr-xl-3,.px-xl-3 {
        padding-right: 1rem !important
    }

    .pb-xl-3,.py-xl-3 {
        padding-bottom: 1rem !important
    }

    .pl-xl-3,.px-xl-3 {
        padding-left: 1rem !important
    }

    .p-xl-4 {
        padding: 1.5rem !important
    }

    .pt-xl-4,.py-xl-4 {
        padding-top: 1.5rem !important
    }

    .pr-xl-4,.px-xl-4 {
        padding-right: 1.5rem !important
    }

    .pb-xl-4,.py-xl-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-xl-4,.px-xl-4 {
        padding-left: 1.5rem !important
    }

    .p-xl-5 {
        padding: 3rem !important
    }

    .pt-xl-5,.py-xl-5 {
        padding-top: 3rem !important
    }

    .pr-xl-5,.px-xl-5 {
        padding-right: 3rem !important
    }

    .pb-xl-5,.py-xl-5 {
        padding-bottom: 3rem !important
    }

    .pl-xl-5,.px-xl-5 {
        padding-left: 3rem !important
    }

    .p-xl-6 {
        padding: 4.5rem !important
    }

    .pt-xl-6,.py-xl-6 {
        padding-top: 4.5rem !important
    }

    .pr-xl-6,.px-xl-6 {
        padding-right: 4.5rem !important
    }

    .pb-xl-6,.py-xl-6 {
        padding-bottom: 4.5rem !important
    }

    .pl-xl-6,.px-xl-6 {
        padding-left: 4.5rem !important
    }

    .p-xl-7 {
        padding: 6rem !important
    }

    .pt-xl-7,.py-xl-7 {
        padding-top: 6rem !important
    }

    .pr-xl-7,.px-xl-7 {
        padding-right: 6rem !important
    }

    .pb-xl-7,.py-xl-7 {
        padding-bottom: 6rem !important
    }

    .pl-xl-7,.px-xl-7 {
        padding-left: 6rem !important
    }

    .p-xl-8 {
        padding: 7.5rem !important
    }

    .pt-xl-8,.py-xl-8 {
        padding-top: 7.5rem !important
    }

    .pr-xl-8,.px-xl-8 {
        padding-right: 7.5rem !important
    }

    .pb-xl-8,.py-xl-8 {
        padding-bottom: 7.5rem !important
    }

    .pl-xl-8,.px-xl-8 {
        padding-left: 7.5rem !important
    }

    .p-xl-9 {
        padding: 9rem !important
    }

    .pt-xl-9,.py-xl-9 {
        padding-top: 9rem !important
    }

    .pr-xl-9,.px-xl-9 {
        padding-right: 9rem !important
    }

    .pb-xl-9,.py-xl-9 {
        padding-bottom: 9rem !important
    }

    .pl-xl-9,.px-xl-9 {
        padding-left: 9rem !important
    }

    .p-xl-10 {
        padding: 10.5rem !important
    }

    .pt-xl-10,.py-xl-10 {
        padding-top: 10.5rem !important
    }

    .pr-xl-10,.px-xl-10 {
        padding-right: 10.5rem !important
    }

    .pb-xl-10,.py-xl-10 {
        padding-bottom: 10.5rem !important
    }

    .pl-xl-10,.px-xl-10 {
        padding-left: 10.5rem !important
    }

    .m-xl-n1 {
        margin: -0.25rem !important
    }

    .mt-xl-n1,.my-xl-n1 {
        margin-top: -0.25rem !important
    }

    .mr-xl-n1,.mx-xl-n1 {
        margin-right: -0.25rem !important
    }

    .mb-xl-n1,.my-xl-n1 {
        margin-bottom: -0.25rem !important
    }

    .ml-xl-n1,.mx-xl-n1 {
        margin-left: -0.25rem !important
    }

    .m-xl-n2 {
        margin: -0.5rem !important
    }

    .mt-xl-n2,.my-xl-n2 {
        margin-top: -0.5rem !important
    }

    .mr-xl-n2,.mx-xl-n2 {
        margin-right: -0.5rem !important
    }

    .mb-xl-n2,.my-xl-n2 {
        margin-bottom: -0.5rem !important
    }

    .ml-xl-n2,.mx-xl-n2 {
        margin-left: -0.5rem !important
    }

    .m-xl-n3 {
        margin: -1rem !important
    }

    .mt-xl-n3,.my-xl-n3 {
        margin-top: -1rem !important
    }

    .mr-xl-n3,.mx-xl-n3 {
        margin-right: -1rem !important
    }

    .mb-xl-n3,.my-xl-n3 {
        margin-bottom: -1rem !important
    }

    .ml-xl-n3,.mx-xl-n3 {
        margin-left: -1rem !important
    }

    .m-xl-n4 {
        margin: -1.5rem !important
    }

    .mt-xl-n4,.my-xl-n4 {
        margin-top: -1.5rem !important
    }

    .mr-xl-n4,.mx-xl-n4 {
        margin-right: -1.5rem !important
    }

    .mb-xl-n4,.my-xl-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-xl-n4,.mx-xl-n4 {
        margin-left: -1.5rem !important
    }

    .m-xl-n5 {
        margin: -3rem !important
    }

    .mt-xl-n5,.my-xl-n5 {
        margin-top: -3rem !important
    }

    .mr-xl-n5,.mx-xl-n5 {
        margin-right: -3rem !important
    }

    .mb-xl-n5,.my-xl-n5 {
        margin-bottom: -3rem !important
    }

    .ml-xl-n5,.mx-xl-n5 {
        margin-left: -3rem !important
    }

    .m-xl-n6 {
        margin: -4.5rem !important
    }

    .mt-xl-n6,.my-xl-n6 {
        margin-top: -4.5rem !important
    }

    .mr-xl-n6,.mx-xl-n6 {
        margin-right: -4.5rem !important
    }

    .mb-xl-n6,.my-xl-n6 {
        margin-bottom: -4.5rem !important
    }

    .ml-xl-n6,.mx-xl-n6 {
        margin-left: -4.5rem !important
    }

    .m-xl-n7 {
        margin: -6rem !important
    }

    .mt-xl-n7,.my-xl-n7 {
        margin-top: -6rem !important
    }

    .mr-xl-n7,.mx-xl-n7 {
        margin-right: -6rem !important
    }

    .mb-xl-n7,.my-xl-n7 {
        margin-bottom: -6rem !important
    }

    .ml-xl-n7,.mx-xl-n7 {
        margin-left: -6rem !important
    }

    .m-xl-n8 {
        margin: -7.5rem !important
    }

    .mt-xl-n8,.my-xl-n8 {
        margin-top: -7.5rem !important
    }

    .mr-xl-n8,.mx-xl-n8 {
        margin-right: -7.5rem !important
    }

    .mb-xl-n8,.my-xl-n8 {
        margin-bottom: -7.5rem !important
    }

    .ml-xl-n8,.mx-xl-n8 {
        margin-left: -7.5rem !important
    }

    .m-xl-n9 {
        margin: -9rem !important
    }

    .mt-xl-n9,.my-xl-n9 {
        margin-top: -9rem !important
    }

    .mr-xl-n9,.mx-xl-n9 {
        margin-right: -9rem !important
    }

    .mb-xl-n9,.my-xl-n9 {
        margin-bottom: -9rem !important
    }

    .ml-xl-n9,.mx-xl-n9 {
        margin-left: -9rem !important
    }

    .m-xl-n10 {
        margin: -10.5rem !important
    }

    .mt-xl-n10,.my-xl-n10 {
        margin-top: -10.5rem !important
    }

    .mr-xl-n10,.mx-xl-n10 {
        margin-right: -10.5rem !important
    }

    .mb-xl-n10,.my-xl-n10 {
        margin-bottom: -10.5rem !important
    }

    .ml-xl-n10,.mx-xl-n10 {
        margin-left: -10.5rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mt-xl-auto,.my-xl-auto {
        margin-top: auto !important
    }

    .mr-xl-auto,.mx-xl-auto {
        margin-right: auto !important
    }

    .mb-xl-auto,.my-xl-auto {
        margin-bottom: auto !important
    }

    .ml-xl-auto,.mx-xl-auto {
        margin-left: auto !important
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace !important
}

.text-justify {
    text-align: justify !important
}

.text-wrap {
    white-space: normal !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left !important
}

.text-right {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align:left !important
    }

    .text-sm-right {
        text-align: right !important
    }

    .text-sm-center {
        text-align: center !important
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align:left !important
    }

    .text-md-right {
        text-align: right !important
    }

    .text-md-center {
        text-align: center !important
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align:left !important
    }

    .text-lg-right {
        text-align: right !important
    }

    .text-lg-center {
        text-align: center !important
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align:left !important
    }

    .text-xl-right {
        text-align: right !important
    }

    .text-xl-center {
        text-align: center !important
    }
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.font-weight-light {
    font-weight: 300 !important
}

.font-weight-lighter {
    font-weight: lighter !important
}

.font-weight-normal {
    font-weight: 400 !important
}

.font-weight-bold {
    font-weight: 700 !important
}

.font-weight-bolder {
    font-weight: bolder !important
}

.font-italic {
    font-style: italic !important
}

.text-white {
    color: #fff !important
}

.text-primary {
    color: #007bff !important
}

a.text-primary:hover,a.text-primary:focus {
    color: #0056b3 !important
}

.text-secondary {
    color: #6c757d !important
}

a.text-secondary:hover,a.text-secondary:focus {
    color: #494f54 !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:hover,a.text-success:focus {
    color: #19692c !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:hover,a.text-info:focus {
    color: #0f6674 !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:hover,a.text-warning:focus {
    color: #ba8b00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:hover,a.text-danger:focus {
    color: #a71d2a !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:hover,a.text-light:focus {
    color: #cbd3da !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:hover,a.text-dark:focus {
    color: #121416 !important
}

.text-body {
    color: #212529 !important
}

.text-muted {
    color: #6c757d !important
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.text-decoration-none {
    text-decoration: none !important
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important
}

.text-reset {
    color: inherit !important
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

@media print {
    *,*::before,*::after {
        text-shadow: none !important;
        box-shadow: none !important
    }

    a:not(.btn) {
        text-decoration: underline
    }

    abbr[title]::after {
        content: \" (\" attr(title) \")\"
    }

    pre {
        white-space: pre-wrap !important
    }

    pre,blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    tr,img {
        page-break-inside: avoid
    }

    p,h2,h3 {
        orphans: 3;
        widows: 3
    }

    h2,h3 {
        page-break-after: avoid
    }

    @page {
        size: a3
    }

    body {
        min-width: 992px !important
    }

    .container {
        min-width: 992px !important
    }

    .navbar {
        display: none
    }

    .badge {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table td,.table th {
        background-color: #fff !important
    }

    .table-bordered th,.table-bordered td {
        border: 1px solid #dee2e6 !important
    }

    .table-dark {
        color: inherit
    }

    .table-dark th,.table-dark td,.table-dark thead th,.table-dark tbody+tbody {
        border-color: #dee2e6
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6
    }
}

/* normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

body {
    margin: 0
}

article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
    display: block
}

audio,canvas,progress,video {
    display: inline-block;
    vertical-align: baseline;
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],template {
    display: none
}

a {
    background-color: transparent
}

a:active,a:hover {
    outline: 0
}

abbr[title] {
    border-bottom: 1px dotted
}

b,strong {
    font-weight: bold
}

dfn {
    font-style: italic
}

h1 {
    margin: 0.67em 0
}

mark {
    background: #ff0;
    color: #000
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -0.5em
}

sub {
    bottom: -0.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 1em 40px
}

hr {
    box-sizing: content-box;
    height: 0
}

pre {
    overflow: auto
}

code,kbd,pre,samp {
    font-family: monospace, monospace;
    font-size: 1em
}

button,input,optgroup,select,textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}

button {
    overflow: visible
}

button,select {
    text-transform: none
}

button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"] {
    -webkit-appearance: button;
    cursor: pointer;
}

button[disabled],html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input {
    line-height: normal
}

input[type=\"checkbox\"],input[type=\"radio\"] {
    box-sizing: border-box;
    padding: 0;
}

input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button {
    height: auto
}

input[type=\"search\"] {
    -webkit-appearance: textfield;
    box-sizing: content-box;
}

input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em
}

legend {
    border: 0;
    padding: 0;
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: bold
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

td,th {
    padding: 0
}

h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,.h {
    font-weight: bold;
    margin: 0 0 0.5em
}

h1,.h1 {
    font-size: 24px;
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 768px) {
    h1,.h1 {
        font-size:42px
    }
}

@media (min-width: 1330px) {
    h1,.h1 {
        font-size:45px
    }
}

h2,.h2 {
    font-size: 45px
}

@media (min-width: 1330px) {
    h2,.h2 {
        font-size:44px
    }
}

h3,.h3 {
    font-size: 20px
}

@media (min-width: 1024px) {
    h3,.h3 {
        font-size:1.1875rem
    }
}

h4,.h4 {
    font-size: 1.0625rem
}

h5,.h5 {
    font-size: 16px
}

@media (min-width: 1024px) {
    h5,.h5 {
        font-size:1.1538462rem
    }
}

h6,.h6 {
    font-size: 1rem
}

.btn {
    padding: 15px;
    font-size: 14px;
    padding: 6px 18px;
    border-radius: 50px;
    color: #fff;
    font-weight: 800;
    border-color: transparent
}

@media (min-width: 768px) {
    .btn {
        font-size:20px;
        padding: 11px 42px
    }
}

.btn.btn-transparent {
    border-radius: 36px;
    border: 4px solid #fff
}

.btn.btn-transparent-blue {
    border: 3px solid #90dade;
    color: #90dade
}

.btn.btn-transparent-blue:hover {
    color: #fff;
    background-color: #90dade
}

.btn.btn-blue {
    border-radius: 36px;
    background-color: #90dade
}

.btn.btn-primary {
    border-radius: 43px;
    background-color: #3975fc;
    border: 3px solid transparent
}

.btn.btn-primary:hover {
    color: #fff;
    border: 3px solid #3975fc;
    background-color: #3975fc;
    webkit-box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    -webkit-transform: translateY(-1px);
    transform: translateY(-1px)
}

.btn.btn-primary-transparent {
    border-radius: 36px;
    border: 3px solid #3975fc;
    color: #3975fc;
    background-color: transparent
}

.btn.btn-primary-transparent:hover {
    color: #fff;
    background-color: #3975fc
}

.btn.btn-white {
    border-radius: 43px;
    background-color: #fff;
    color: #3975fc
}

.btn.btn-orange-transparent {
    border-radius: 43px;
    border: 3px solid #ff6c4d;
    border-color: #ff6c4d;
    color: #ff6c4d;
    background-color: transparent
}

.btn.btn-orange-transparent:hover {
    background-color: #ff6c4d;
    color: #fff
}

.btn.btn-pink {
    border-radius: 43px;
    background-color: #ffad9f
}

@font-face {
    font-family: 'Centra No1';
    font-weight: bold;
    src: url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.eot');
    src: local('☺'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.woff') format('woff'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.ttf') format('truetype'), url('/assets/fonts/c6033181bc6481c1cfa042c13c1a7f84-CentraNo1-Black.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.eot');
    src: local('☺'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.woff') format('woff'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.ttf') format('truetype'), url('/assets/fonts/19b7d364259f695e4fb2167f712c7a0e-CentraNo1-Book.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Centra No1';
    src: url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.eot');
    src: local('☺'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.woff') format('woff'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.ttf') format('truetype'), url('/assets/fonts/9e6a15138c1945ce31a6cd1ebef59f60-CentraNo1-Extrabold.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Lucky Fellas';
    src: url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.eot');
    src: local('☺'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.woff') format('woff'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.ttf') format('truetype'), url('/assets/fonts/5198b9160db87459177c58ce353fe195-Nicky Laatz  - Lucky Fellas.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'centra_no1black';
    src: url('/assets/c6033181bc6481c1cfa042c13c1a7f84-centrano1-black_1-webfont.woff2') format('woff2'), url('/assets/c6033181bc6481c1cfa042c13c1a7f84-centrano1-black_1-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

#header {
    z-index: 99
}

.is-scrolled.header {
    background-color: #fff
}

.is-scrolled .fixed-logo {
    display: none
}

.is-scrolled .sticky-logo {
    display: block
}

.fixed-logo {
    display: none
}

@media (min-width: 768px) {
    .fixed-logo {
        display:block
    }
}

.sticky-logo {
    display: block;
    width: 63px;
    height: 63px
}

@media (min-width: 768px) {
    .sticky-logo {
        display:none;
        width: auto;
        height: auto
    }
}

.nav-box {
    position: relative
}

.nav-box .user-login {
    display: none
}

@media (min-width: 768px) {
    .nav-box .user-login {
        display:block
    }
}

.nav-box .user-login:hover svg path {
    stroke: #707070
}

.nav-box .user-login svg {
    width: 30px
}

.nav-opener {
    width: 28px;
    height: auto;
    padding: 15px 20px;
    transition: 0.3s;
    top: 4px;
    right: 0px;
    display: block;
    z-index: 99;
    position: relative
}

@media (min-width: 768px) {
    .nav-opener {
        width:42px;
        top: 13px
    }
}

.nav-opener:hover .icon-search {
    color: #172f30
}

.nav-opener:before,.nav-opener:after {
    background: #ff6c4d;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .nav-opener:before,.nav-opener:after {
        height:4px;
        width: 50px
    }
}

.nav-opener span {
    background: #ff6c4d;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .nav-opener span {
        height:4px;
        width: 50px
    }
}

.nav-opener:before,.nav-opener:after {
    content: '';
    top: 4px
}

@media (min-width: 768px) {
    .nav-opener:before,.nav-opener:after {
        top:-2px
    }
}

.nav-opener:after {
    top: 21px
}

@media (min-width: 768px) {
    .nav-opener:after {
        top:26px
    }
}

.nav-active .nav-opener span {
    opacity: 0
}

.nav-active .nav-opener:before,.nav-active .nav-opener:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.nav-active .nav-opener:after {
    transform: rotate(-45deg)
}

.filter-active .filter-opener {
    z-index: 0
}

.filter-opener {
    width: 78px;
    height: 59px;
    border-radius: 26px 0 0;
    background-color: #404040;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: fixed;
    right: 0;
    bottom: 10px;
    z-index: 8
}

@media (min-width: 768px) {
    .filter-opener {
        right:0;
        top: 50%;
        bottom: inherit
    }
}

.filter-opener span {
    color: #fff;
    font-size: 13px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

@media (min-width: 768px) {
    .filter-opener {
        display:none
    }
}

.filter-opener:hover .icon-search {
    color: #172f30
}

.nav-active .wrapp-site-menu {
    display: flex;
    animation-name: fadeIn;
    visibility: visible;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

.wrapp-site-menu {
    background-color: #ff6c4d;
    position: fixed;
    width: 100%;
    z-index: 999;
    transition: 0.3s;
    animation-delay: 0.5s;
    animation-name: fadeOut;
    visibility: hidden;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

.wrapp-site-menu .wrapp-content {
    overflow: auto;
    height: 100vh;
    min-height: 350px;
    padding: 30px 25px
}

.wrapp-site-menu .card-leng a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 17px;
    font-weight: 700;
    line-height: 21px;
    text-transform: uppercase;
    text-decoration: none
}

.wrapp-site-menu .card-logo .logo {
    width: 122px
}

.wrapp-site-menu .card-logo .logo img {
    width: 122px
}

.wrapp-site-menu .nav-opener:before,.wrapp-site-menu .nav-opener:after {
    background: #ffe9db
}

.wrapp-site-menu .social-list a:hover {
    opacity: 0.6
}

.wrapp-site-menu .nav {
    width: 100%;
    margin-bottom: 50px
}

.wrapp-site-menu .nav li {
    border-bottom: 1px solid #fff;
    width: 100%;
    margin: 0 auto
}

.wrapp-site-menu .nav li.hover .drop {
    display: block
}

.wrapp-site-menu .nav li a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 25px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 27px;
    padding: 30px 15px;
    text-decoration: none;
    display: block
}

@media (min-width: 768px) {
    .wrapp-site-menu .nav li a {
        font-size:45px;
        line-height: 50px
    }
}

.wrapp-site-menu .nav li .drop {
    display: none
}

.wrapp-site-menu .nav li .drop li {
    border-bottom: none
}

.wrapp-site-menu .nav li .drop a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 22px;
    font-weight: 300;
    line-height: 27px;
    text-decoration: none;
    padding: 0px 11px 10px;
    display: block
}

@media (min-width: 768px) {
    .wrapp-site-menu .nav li .drop a {
        font-size:22px;
        line-height: 28px
    }
}

.wrapp-site-menu .card-links {
    position: relative;
    top: 50px
}

.wrapp-site-menu .btn {
    padding: 14px 56px
}

@media (min-width: 768px) {
    .wrapp-site-menu .btn {
        padding:11px 42px
    }
}

.is-scrolled.header-booking_index .nav-opener:before,.is-scrolled.header-booking_index .nav-opener:after {
    background: #ff6c4d
}

.is-scrolled.header-booking_index .nav-opener span {
    background: #ff6c4d
}

.is-scrolled.header-booking_index .num1 {
    display: none
}

@media (min-width: 768px) {
    .is-scrolled.header-booking_index .num1 {
        display:none
    }
}

.is-scrolled.header-booking_index .num2 {
    display: none
}

@media (min-width: 768px) {
    .is-scrolled.header-booking_index .num2 {
        display:block
    }
}

.header-booking_index .num1 {
    display: none
}

@media (min-width: 768px) {
    .header-booking_index .num1 {
        display:block
    }
}

.header-booking_index .num2 {
    display: none
}

@media (min-width: 768px) {
    .header-booking_index .num2 {
        display:none
    }
}

.header-booking_index .nav-opener {
    width: 28px;
    height: auto;
    padding: 15px 20px;
    transition: 0.3s;
    top: 4px;
    right: 0px;
    display: block;
    z-index: 99;
    position: relative
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener {
        width:42px;
        top: 13px
    }
}

.header-booking_index .nav-opener:hover .icon-search {
    color: #172f30
}

.header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
    background: #fff;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
        height:4px;
        width: 50px
    }
}

.header-booking_index .nav-opener span {
    background: #fff;
    position: absolute;
    top: 12px;
    left: 1px;
    right: 6px;
    height: 3px;
    width: 28px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener span {
        height:4px;
        width: 50px
    }
}

.header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
    content: '';
    top: 4px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:before,.header-booking_index .nav-opener:after {
        top:-2px
    }
}

.header-booking_index .nav-opener:after {
    top: 21px
}

@media (min-width: 768px) {
    .header-booking_index .nav-opener:after {
        top:26px
    }
}

.nav-active .header-booking_index .nav-opener span {
    opacity: 0
}

.nav-active .header-booking_index .nav-opener:before,.nav-active .header-booking_index .nav-opener:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.nav-active .header-booking_index .nav-opener:after {
    transform: rotate(-45deg)
}

.header-booking_index .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media (min-width: 768px) {
    .header-booking_index .navbar-brand img {
        width:auto;
        height: auto
    }
}

.header-achat-steps {
    box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
}

.header-achat-steps .navbar {
    padding: 0.7rem 1rem
}

.header-achat-steps .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .header-achat-steps .navbar-brand img {
        width: auto
    }
}

@media (max-width: 768px) {
    .header-achat-steps .navbar-brand img {
        width:30px;
        height: auto
    }
}

.header-achat-confirmation .navbar-brand img {
    display: block;
    width: 63px;
    height: 63px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .header-achat-confirmation .navbar-brand img {
        width: auto
    }
}

@media (min-width: 768px) {
    .header-achat-confirmation .navbar-brand img {
        width:auto;
        height: auto
    }
}

.footer {
    background-color: #333
}

.list-nav-footer a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding-top: 5px;
    display: inline-block;
    padding-bottom: 5px
}

.logo-footer {
    width: 116px
}

@media (min-width: 768px) {
    .logo-footer {
        width:auto
    }
}

.logo-footer img {
    width: 116px
}

@media (min-width: 768px) {
    .logo-footer img {
        width:auto
    }
}

.social-list a:hover {
    opacity: 0.6
}

.footer-form .btn-input {
    padding: 11px;
    font-size: 15PX
}

.footer-form label {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 700;
    line-height: 27px
}

.footer-form .input-control {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 50px 0 0 50px;
    background-color: #fff;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    border: 2px solid transparent;
    padding: 8px 27px
}

.footer-form .input-control::placeholder {
    opacity: 0.5;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.copy p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 24px
}

.copy p a {
    color: #707070;
    text-decoration: none
}

.bg-stretch {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.scroll-locked,.page-scroll-locked {
    overflow: hidden;
    position: fixed;
    left: 0;
    right: 0;
    width: 100%
}

.fadeIn {
    visibility: hidden
}

.fadeIn.time0-1 {
    animation-delay: 0.5s
}

.fadeIn.time0-22 {
    animation-delay: 0.9s
}

.fadeIn.time0-2 {
    animation-delay: 0.7s
}

.fadeIn.time0-33 {
    animation-delay: 1.3s
}

.fadeIn.time0-3 {
    animation-delay: 0.9s
}

.fadeIn.time0-44 {
    animation-delay: 1.7s
}

.fadeIn.time0-4 {
    animation-delay: 1.2s
}

.fadeIn.time0-55 {
    animation-delay: 2.1s
}

.fadeIn.time0-5 {
    animation-delay: 1.4s
}

.fadeIn.in-viewport,.in-viewport .fadeIn {
    animation-name: fadeIn;
    visibility: visible;
    animation-duration: 0.75s;
    animation-fill-mode: both
}

@keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

.in-viewport .animate-right {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.in-viewport .animate-left {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.in-viewport .animate-top {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.animate-right {
    transform: translate(50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.animate-left {
    transform: translate(-50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.animate-top {
    transform: translate(0, 50%) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

.text-gray {
    color: #707070
}

.text-blue {
    color: #90dade
}

.text-orange {
    color: #ff6c4d
}

.text-pink {
    color: #ffad9f
}

.text-dark-gray {
    color: #404040
}

.bg-blue-light {
    background-color: #90dade
}

.btn-warning {
    background-color: #ff6c4d
}

.bg-warning {
    background-color: #ff6c4d !important
}

.bg-dark-warning {
    background-color: #e46a44
}

.bg-dark-blue {
    background-color: #3975fc
}

.text-dark-blue {
    color: #3975fc
}

.section-images .card-img img {
    width: 100%
}

#wrapper {
    position: relative
}

.back-to-top {
    opacity: 0;
    position: absolute;
    right: 0;
    bottom: 0px
}

.skip-content {
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0px
}

.card-statick-img {
    width: auto;
    position: absolute;
    bottom: 0;
    top: 0%;
    left: 50%;
    transform: translateX(-50%)
}

@media (max-height: 680px),screen and (orientation:portrait) {
    .card-statick-img {
        top:45px
    }
}

@media (min-width: 700px) {
    .card-statick-img {
        top:17%;
        left: 0%;
        transform: translateX(0);
        width: 654px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .card-statick-img {
        left:50%;
        width: inherit;
        transform: translateX(-50%)
    }
}

@media (min-width: 1330px) {
    .card-statick-img {
        top:0
    }
}

@media (min-width: 1430px) {
    .card-statick-img {
        left:5%
    }
}

@media (min-width: 1550px) {
    .card-statick-img {
        left:10%
    }
}

.card-statick-img img {
    max-height: 375px;
    height: 100%;
    width: auto
}

@media (min-width: 375px) {
    .card-statick-img img {
        max-height:440px
    }
}

@media (min-width: 1024px) {
    .card-statick-img img {
        max-height:600px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .card-statick-img img {
        max-height:375px
    }
}

@media (min-width: 1330px) {
    .card-statick-img img {
        max-height:847px
    }
}

.wheel-slideshow {
    position: relative
}

.wheel-slideshow:after {
    content: '';
    background-image: url('/assets/images/slide-bg-bottom-mobile.png');
    display: block;
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100% 60%;
    z-index: 1
}

@media (min-height: 813px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:203% 60%
    }
}

@media (min-height: 768px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:180% 45%
    }
}

@media (min-height: 568px),screen and (orientation:portrait) {
    .wheel-slideshow:after {
        background-size:100% 50%
    }
}

@media (min-width: 700px) {
    .wheel-slideshow:after {
        background-image:url('{{ asset('asset/images/slide-bg-bottom.png') }}');
        background-size: 203% 44%
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .wheel-slideshow:after {
        background-size:100% 28%
    }
}

.wheel-slideshow .bounce {
    animation: bounce 2s;
    transform: translateY(0px);
    animation-iteration-count: infinite
}

@keyframes bounce {
    0% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }

    50% {
        top: 140px;
        height: 140px;
        -webkit-animation-timing-function: ease-out
    }

    55% {
        top: 160px;
        height: 120px;
        -webkit-animation-timing-function: ease-in
    }

    65% {
        top: 120px;
        height: 140px;
        -webkit-animation-timing-function: ease-out
    }

    95% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }

    100% {
        top: 0;
        -webkit-animation-timing-function: ease-in
    }
}

.slideset .slide:first-child .slide-text-gallery .btn {
    display: block
}

.slideset .slide:first-child .list-nav-slide {
    display: none
}

.slideset .slide:first-child h1,.slideset .slide:first-child h2 {
    display: inline-block;
    position: relative;
    font-family: 'Centra No1';
    font-weight: 900;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .slideset .slide:first-child h1,.slideset .slide:first-child h2 {
        font-size:45px
    }
}

.slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
    content: '';
    background-image: url('/assets/images/layer-smile-white.png');
    display: inline-block;
    width: 36px;
    height: 14px;
    background-size: 36px;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 10px;
    right: -30px
}

@media (min-width: 700px) {
    .slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
        background-image:url('/assets/images/smile-min-gray.png');
        width: 90px;
        height: 35px;
        background-size: 90px;
        right: -120px
    }
}

@media (min-width: 1330px) {
    .slideset .slide:first-child h1:after,.slideset .slide:first-child h2:after {
        background-image:url('/assets/images/smile-min-gray.png');
        width: 127px;
        height: 50px;
        background-size: 127px;
        right: -120px
    }
}

.slideset .slide h1,.slideset .slide h2 {
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .slideset .slide h1,.slideset .slide h2 {
        font-size:45px
    }
}

.slideset .slide .btn {
    padding: 11px 34px;
    margin: auto
}

@media (min-width: 700px) {
    .slideset .slide .btn {
        padding:11px 42px;
        margin: 0
    }
}

.slideset .slide .slide-img-gallery {
    width: auto;
    position: absolute;
    bottom: 0;
    top: 0%;
    left: 50%;
    transform: translateX(-50%)
}

@media (max-height: 680px),screen and (orientation:portrait) {
    .slideset .slide .slide-img-gallery {
        top:45px
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-img-gallery {
        top:17%;
        left: 0%;
        transform: translateX(0);
        width: 654px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-img-gallery {
        left:50%;
        width: auto;
        transform: translateX(-50%)
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-img-gallery {
        top:0
    }
}

@media (min-width: 1430px) {
    .slideset .slide .slide-img-gallery {
        left:5%
    }
}

@media (min-width: 1550px) {
    .slideset .slide .slide-img-gallery {
        left:10%
    }
}

.slideset .slide .slide-img-gallery img {
    max-height: 375px;
    height: 100%;
    width: auto
}

@media (min-width: 375px) {
    .slideset .slide .slide-img-gallery img {
        max-height:440px
    }
}

@media (min-width: 1024px) {
    .slideset .slide .slide-img-gallery img {
        max-height:600px
    }
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-img-gallery img {
        max-height:375px
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-img-gallery img {
        max-height:847px
    }
}

.slideset .slide .slide-text-gallery {
    position: absolute;
    left: 50%;
    top: 80%;
    transform: translate(-50%, -50%);
    width: 58vw;
    padding: 0 15px 0 0;
    display: flex !important
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .slideset .slide .slide-text-gallery {
        display:none !important
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery {
        left:75%;
        top: 40%
    }
}

@media (min-width: 750px) {
    .slideset .slide .slide-text-gallery {
        left:75%;
        width: 68vw
    }
}

@media (min-width: 855px) {
    .slideset .slide .slide-text-gallery {
        width:78vw;
        left: 78%
    }
}

@media (min-width: 1024px) {
    .slideset .slide .slide-text-gallery {
        width:700px
    }
}

@media (min-width: 1330px) {
    .slideset .slide .slide-text-gallery {
        top:40%;
        width: 583px;
        left: 72%
    }
}

@media (min-width: 1700px) {
    .slideset .slide .slide-text-gallery {
        left:67%
    }
}

.slideset .slide .slide-text-gallery .btn {
    display: none
}

.slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
    color: #fff;
    position: relative;
    left: 22px
}

@media (max-width: 701px) {
    .slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
        font-size:30px
    }
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery h1,.slideset .slide .slide-text-gallery h2 {
        color:#707070;
        left: 0;
        font-size: 70px
    }
}

.slideset .slide .slide-text-gallery h1 span,.slideset .slide .slide-text-gallery h2 span {
    color: #3975fc
}

.slideset .slide .slide-text-gallery p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1';
    height: 51px;
    overflow: hidden;
    width: 100%;
    position: relative;
    left: 22px;
    padding-right: 20px
}

@media (min-width: 700px) {
    .slideset .slide .slide-text-gallery p {
        height:auto;
        position: static
    }
}

.list-nav-slide {
    position: absolute;
    left: -5%;
    top: 10%;
    transform: translate(-50%)
}

@media (min-width: 700px) {
    .list-nav-slide {
        left:-10%;
        top: 23%
    }
}

@media (min-width: 1330px) {
    .list-nav-slide {
        top:50%
    }
}

.list-nav-slide li {
    margin-bottom: 50px;
    width: 10px;
    height: 10px;
    border: 1px solid #fff;
    background-color: transparent;
    border-radius: 50%;
    position: relative
}

@media (min-width: 700px) {
    .list-nav-slide li {
        border:1px solid #707070;
        background-color: #fff
    }
}

.list-nav-slide li:nth-child(4n) {
    margin-bottom: 0px
}

.list-nav-slide li:nth-child(4n):after {
    content: none
}

.list-nav-slide li:after {
    content: '';
    width: 1px;
    height: 50px;
    background-color: #fff;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 100%
}

@media (min-width: 700px) {
    .list-nav-slide li:after {
        background-color:#707070
    }
}

.list-nav-slide li.active {
    background-color: #fff
}

@media (min-width: 700px) {
    .list-nav-slide li.active {
        background-color:#707070
    }
}

.list-nav-slide li span {
    display: none
}

.list-nav-slide li:first-child {
    display: none
}

.section-top-option .container {
    padding: 0
}

@media (min-width: 700px) {
    .section-top-option .container {
        padding:0 15px
    }
}

.section-top-option .row {
    padding: 0
}

@media (min-width: 768px) {
    .section-top-option .row:nth-child(even) {
        flex-direction:row-reverse !important
    }
}

.section-top-option .row:nth-child(even) .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
}

.section-top-option .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 700px) {
}

.section-top-option .card-title {
    margin-bottom: 29px
}

.section-top-option .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-top-option .card-title h2 {
        font-size:45px;
        line-height: 1em
    }
}

.section-top-option .card-title h2 span {
    color: #ff6c4d
}

.section-top-option p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-top-option p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-top-option a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-top-option a {
        font-size:20px;
        line-height: 45px
    }
}

.section-top-option .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-top-option .card-img img {
        max-width:100%
    }
}

.js-tab-hidden {
    display: block !important;
    left: -9999px !important;
    position: absolute !important;
    top: -9999px !important
}

.section-logistic {
    background-color: #ffad9f
}

.section-logistic .in-viewport .card-title .h1:after {
    content: '';
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.section-logistic .card-title {
    margin: 0 auto
}

@media (min-width: 768px) {
    .section-logistic .card-title {
        width:auto
    }
}

.section-logistic .card-title .h1 {
    font-weight: 900;
    line-height: 39px;
    color: #fff;
    position: relative;
    z-index: 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-logistic .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-logistic .card-title .h1 span {
    color: #ff6c4d;
    z-index: 2
}

.section-logistic .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/hart-trans.png');
    display: block;
    width: 60px;
    height: 75px;
    background-size: 60px;
    background-repeat: no-repeat;
    position: absolute;
    right: 8px;
    top: -29px;
    z-index: -1;
    transform: translate(50%, 0) translate3d(0px, 0px, 0px);
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.5s;
    transition-timing-function: linear
}

@media (min-width: 768px) {
    .section-logistic .card-title .h1:after {
        width:150px;
        height: 161px;
        background-size: 111px;
        right: -77px;
        top: -21px
    }
}

.wrapp-logistic {
    padding: 6vh 0
}

@media (min-width: 768px) {
    .wrapp-logistic {
        padding:45px 0
    }
}

.wrapp-logistic .viewport-section.in-viewport {
    background: #0f0
}

.section-logistic.delivery .logistic-tabset {
    justify-content: space-around;
    max-width: 900px;
    margin: 0 auto
}

.section-logistic.delivery .logistic-tabset li {
    width: 50%
}

.section-logistic.delivery .tab-content {
    justify-content: space-around;
    max-width: 900px;
    margin: 0 auto
}

@media (min-width: 768px) {
    .section-logistic.delivery .tab-content .item-tab {
        width:50%
    }
}

.section-logistic .logistic-tabset {
    display: flex;
    margin-bottom: 0;
    padding: 0
}

.section-logistic .logistic-tabset li {
    width: 33.33%;
    margin: 0 5px
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li {
        margin:0 15px
    }
}

.section-logistic .logistic-tabset li a {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    opacity: 0.5
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li a {
        opacity:1;
        cursor: inherit
    }
}

.section-logistic .logistic-tabset li a .card-title {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 700;
    line-height: 27px;
    margin: 0
}

@media (max-width: 767px) {
    .section-logistic .logistic-tabset li a.active {
        opacity:1
    }

    .section-logistic .logistic-tabset li a.active p {
        border-bottom: 5px solid #fff
    }
}

.section-logistic .logistic-tabset li p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-logistic .logistic-tabset li p {
        font-size:18px;
        font-weight: bold;
        line-height: 28px
    }
}

.section-logistic .logistic-tabset li .card-icon {
    width: 53px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 35px
}

@media (min-width: 480px) {
    .section-logistic .logistic-tabset li .card-icon {
        width:97px;
        height: 112px
    }
}

.section-logistic .logistic-tabset li .card-icon img {
    width: 100%
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-logistic .logistic-tabset li .card-icon img {
        width: auto
    }
}

.section-logistic .tab-content {
    display: flex;
    margin-bottom: 0
}

.section-logistic .tab-content .item-tab {
    width: 100%;
    margin: 0 15px
}

@media (min-width: 768px) {
    .section-logistic .tab-content .item-tab {
        width:33.33%
    }
}

.section-logistic .tab-content p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-logistic .js-tab-hidden {
    display: block !important;
    left: -9999px !important;
    position: absolute !important;
    top: -9999px !important
}

@media (min-width: 768px) {
    .section-logistic .js-tab-hidden {
        position:static !important
    }
}

.popup-holder .popup {
    display: none;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    z-index: 100;
    width: 100%;
    height: 100%;
    overflow: auto;
    overflow-x: hidden;
    align-items: center;
    justify-content: center;
    background-color: rgba(87, 87, 87, 0.8)
}

.popup-holder .popup.popup-locked-active {
    display: block
}

.popup-holder .wrapp-popup-all {
    margin: 25px 0
}

.popup-holder .jcf-scrollable-wrapper {
    width: auto !important
}

.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-dec,.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-inc {
    background: #3975fc;
    height: 3px;
    width: 3px;
    left: 0;
    top: 0
}

.popup-holder .jcf-scrollbar-slider {
    width: 3px
}

.popup-holder .jcf-scrollbar-vertical .jcf-scrollbar-handle {
    background: #3975fc;
    width: 3px
}

.popup-holder .jcf-scrollbar-vertical {
    width: 3px
}

.popup-holder .wrapp-popup {
    max-width: 600px !important;
    width: 100% !important;
    background-color: #3975fc;
    padding: 45px 37px 35px;
    margin: 0 auto;
    position: relative
}

@media (min-width: 768px) {
    .popup-holder .wrapp-popup {
        padding:124px 60px 83px
    }
}

.popup-holder .card-header {
    padding: 0;
    margin-bottom: 0;
    background-color: transparent;
    border-bottom: 0px solid transparent
}

.popup-holder .card-icon {
    margin-bottom: 33px
}

.popup-holder .close {
    opacity: 1;
    position: absolute;
    right: 33px;
    top: 33px;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.popup-holder .close span {
    top: 12px;
    left: 1px;
    right: 6px;
    height: 4px;
    width: 35px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    position: relative
}

.popup-holder .close span:after {
    top: 15px;
    left: -6px;
    right: 6px;
    height: 4px;
    width: 45px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    display: block;
    -webkit-transform: rotate(50deg);
    transform: rotate(47deg)
}

.popup-holder .close span:before {
    top: 15px;
    left: -5px;
    right: 6px;
    height: 4px;
    width: 45px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 2px;
    background-color: #fff;
    display: block;
    -webkit-transform: rotate(-50deg);
    transform: rotate(-46deg)
}

.popup-holder .close span:before,.popup-holder .close span:after {
    content: '';
    position: absolute
}

.nav-active .popup-holder .close span span {
    opacity: 0
}

.nav-active .popup-holder .close span:before,.nav-active .popup-holder .close span:after {
    transform: rotate(45deg);
    top: 11px;
    left: 0px;
    right: 6px
}

.popup-holder .title h2 {
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 400;
    line-height: 49px;
    color: #fff;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 768px) {
    .popup-holder .title h2 {
        font-size:48px
    }
}

.popup-holder .title h2 span {
    color: #ffad9f
}

@media (min-width: 768px) {
    .popup-holder .title h2 span {
        color:#ffe9db
    }
}

.popup-holder .title p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .popup-holder .title p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.popup-holder form.success-sending .succes {
    display: block
}

.popup-holder form .form-control-wrapp {
    margin-bottom: 15px
}

.popup-holder form .form-control {
    background-color: transparent;
    border: none;
    border-bottom: 3px solid #fff;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    line-height: 18px;
    border-radius: 0;
    padding: 0.375rem 0.75rem 0.375rem 0
}

.popup-holder form .form-control.input-error {
    border-bottom: 3px solid #e92525
}

@media (min-width: 768px) {
    .popup-holder form .form-control {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.popup-holder form .form-control::placeholder {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    line-height: 18px
}

@media (min-width: 768px) {
    .popup-holder form .form-control::placeholder {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.popup-holder form .succes {
    display: none;
    text-align: center;
    padding-top: 20px
}

.popup-holder form .succes p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .popup-holder form .succes p {
        font-size:23px;
        line-height: 28px;
        margin-left: 20px
    }
}

.popup-holder form .wrapp-btn .btn-transparent {
    min-width: 208px
}

.popup-holder form .form-control-checkbox {
    margin-top: 40px;
    margin-bottom: 33px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox {
        margin-top:148px
    }
}

.popup-holder form .form-control-checkbox label {
    display: flex;
    align-items: flex-start;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox label {
        font-size:18px;
        line-height: 28px;
        margin-left: 20px
    }
}

.popup-holder form .form-control-checkbox .custom-control-label::before,.popup-holder form .form-control-checkbox .custom-control-label::after {
    height: 21px;
    width: 21px;
    left: -40px
}

@media (min-width: 768px) {
    .popup-holder form .form-control-checkbox .custom-control-label::before,.popup-holder form .form-control-checkbox .custom-control-label::after {
        height:32px;
        width: 32px;
        left: -40px
    }
}

.popup-holder form .form-control-checkbox .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #fff;
    background-color: #007bff
}

.custom-text .wrapp-case-clients .card-title strong {
    color: #3975fc
}

.custom-text .wrapp-case-clients .card-title p {
    color: #ffad9f
}

.custom-text .wrapp-case-clients .wrapp-case-tabset .card-title {
    margin: 30px 0
}

.custom-text .wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
    color: #707070
}

.custom-text .wrapp-case-discover {
    position: relative
}

.custom-text .wrapp-case-discover .wrapp-case-tabset:before {
    content: none;
    background-image: linear-gradient(to right, #fff 0%, rgba(235, 235, 235, 0) 100%, rgba(255, 255, 255, 0) 100%);
    width: 515px;
    height: 589px;
    display: block;
    position: absolute;
    top: 50px;
    z-index: 22
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        content:''
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-220px
    }
}

@media (min-width: 1200px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-170px
    }
}

@media (min-width: 1500px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:before {
        left:-80px
    }
}

.custom-text .wrapp-case-discover .wrapp-case-tabset:after {
    content: none;
    background-image: linear-gradient(270deg, #fff 0%, rgba(235, 235, 235, 0) 100%, rgba(255, 255, 255, 0) 100%);
    width: 515px;
    height: 589px;
    display: block;
    position: absolute;
    top: 50px;
    z-index: 25
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        content:''
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-220px
    }
}

@media (min-width: 1200px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-170px
    }
}

@media (min-width: 1500px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset:after {
        right:-80px
    }
}

.custom-text .wrapp-case-discover .wrapp-case-tabset .card-title {
    margin: 0px 0 65px
}

.custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
    color: #ff6c4d;
    font-size: 38px
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1024px) {
    .custom-text .wrapp-case-discover .wrapp-case-tabset .card-title .h1 {
        font-size:45px
    }
}

.custom-text .wrapp-case-discover .box-info:after {
    content: '';
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #000;
    opacity: 0.6;
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0
}

.custom-text .wrapp-case-discover .text-holder {
    z-index: 99;
    left: 22px !important;
    bottom: -20px !important
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .text-holder {
        padding-right: 15px;
        left: 14px !important;
        width: 100%
    }
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .text-holder {
        left:30px !important;
        bottom: 30px !important
    }
}

.custom-text .wrapp-case-discover .text-holder ul p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 0.7px;
    line-height: 33px
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .text-holder ul p {
        font-size:25px;
        line-height: 33px
    }
}

.custom-text .wrapp-case-discover .case-center {
    margin-bottom: 10px;
    width: 100%
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center {
        margin-bottom:124px
    }
}

.custom-text .wrapp-case-discover .case-center img {
    width: 109px;
    margin-bottom: 15px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .case-center img {
        width: auto;
        zoom:0.4}
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center img {
        width:220px;
        margin-bottom: 15px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .custom-text .wrapp-case-discover .case-center img {
        width:auto
    }
}

.custom-text .wrapp-case-discover .case-center span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 700;
    line-height: 26px;
    max-width: 390px;
    display: block;
    width: 100%
}

@media (min-width: 768px) {
    .custom-text .wrapp-case-discover .case-center span {
        font-size:22px;
        line-height: 36px
    }
}

.custom-text .case-tabset {
    display: none !important
}

.section-discover-cases {
    padding: 50px 0 50px
}

@media (min-width: 768px) {
    .section-discover-cases {
        padding:120px 0 100px
    }
}

.wrapp-case-clients {
    padding: 130px 0 124px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-case-clients {
        padding:59px 0 124px
    }
}

.wrapp-case-clients .card-title.first-top {
    position: absolute;
    left: 0;
    top: -34px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title.first-top {
        position:static
    }
}

.wrapp-case-clients .card-title strong {
    display: block;
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title strong {
        font-size:95px
    }
}

.wrapp-case-clients .card-title p {
    color: #ffe9db;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title p {
        font-size:100px;
        top: -44px
    }
}

.wrapp-case-clients .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .wrapp-case-clients .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 220px
    }
}

.wrapp-case-clients .wrapp-case-tabset {
    margin-top: -88px
}

.wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-case-clients .wrapp-case-tabset .card-title .h1 {
        font-size:45px;
        line-height: 85px
    }
}

.wrapp-case-clients .case-tabset {
    padding: 0 0 80px
}

.wrapp-case-clients .case-tabset li a {
    opacity: 0.5;
    min-width: 137px;
    width: 100%;
    padding: 9px 6px 11px
}

@media (min-width: 768px) {
    .wrapp-case-clients .case-tabset li a {
        min-width:205px
    }
}

.wrapp-case-clients .case-tabset li a.active {
    opacity: 1
}

.section-trust .container {
    padding: 0
}

@media (min-width: 768px) {
    .section-trust .container {
        padding:0 15px
    }
}

.section-trust.no-slide {
    padding: 89px 0 0px
}

.wrapp-slide-trust {
    max-width: 1080px;
    background-image: url('/assets/images/bg-slide-trust.png');
    background-repeat: no-repeat;
    width: 100%;
    padding: 205px 0 100px;
    overflow: hidden;
    background-position: center 88px
}

@media (max-width: 480px) {
    .wrapp-slide-trust {
        padding:117px 0;
        background-position: center -34px
    }
}

.wrapp-trust {
    padding: 89px 0 0px
}

.wrapp-trust .card-title {
    padding: 10px 15px
}

.wrapp-trust .card-title.no-after .h1:after {
    content: none
}

.wrapp-trust .card-title .h1 {
    color: #ff6c4d;
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-trust .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.wrapp-trust .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-orange.png');
    width: 102px;
    height: 42px;
    display: block;
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%)
}

.wrapp-trust .card-title .h1 span {
    color: #707070
}

.wrapp-trust .card-sub-title {
    position: relative;
    top: 69px
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title {
        position:static
    }
}

.wrapp-trust .card-sub-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title p {
        font-size:115px
    }
}

.wrapp-trust .card-sub-title strong {
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 11px;
    transform: rotate(-3deg)
}

@media (min-width: 768px) {
    .wrapp-trust .card-sub-title strong {
        font-size:80px;
        margin-top: -54px;
        left: 28px
    }
}

.card-title-sub {
    padding: 10px 15px
}

.card-title-sub.no-after .h1:after {
    content: none
}

.card-title-sub .h1 {
    color: #ff6c4d;
    font-size: 30px;
    font-weight: 900;
    line-height: 39px;
    position: relative
}

@media (min-width: 768px) {
    .card-title-sub .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.card-title-sub .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-orange.png');
    width: 102px;
    height: 42px;
    display: block;
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%)
}

.card-title-sub .h1 span {
    color: #707070
}

.widget-trust img {
    width: 100%
}

.wrapp-intro-contact {
    width: 100%;
    height: 400px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -100px;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1;
    background-size: cover
}

@media (min-width: 768px) {
    .wrapp-intro-contact {
        height:35vh;
        background-position: bottom
    }
}

.wrapp-intro-contact .card-title {
    margin-top: 100px
}

.wrapp-intro-contact .card-title .h1 {
    position: relative;
    font-size: 60px
}

@media (min-width: 768px) {
    .wrapp-intro-contact .card-title .h1 {
        font-size:45px;
        line-height: 53px
    }
}

.wrapp-intro-contact .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-blue.png');
    width: 36px;
    height: 14px;
    background-size: 36px;
    background-repeat: no-repeat;
    display: block;
    position: absolute;
    bottom: -16px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-contact .card-title .h1:after {
        width:108px;
        height: 42px;
        background-size: 108px;
        bottom: -50px
    }
}

.section-intro.height-custom {
    height: 250px
}

@media (min-width: 500px) {
    .section-intro.height-custom {
        height:350px
    }
}

.section-contact-form .card-text a {
    color: #707070;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-contact-form .card-text a {
        font-size:45px;
        line-height: 1.2
    }
}

.section-contact-form .card-text a:hover {
    color: #ff6c4d
}

.section-contact-form .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .section-contact-form .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 21px
    }
}

.form-contact-page label {
    font-family: 'Centra No1';
    color: #707070
}

.form-contact-page.success-sending .succes {
    display: block
}

.form-contact-page .wrapp-input-control {
    margin-bottom: 25px
}

.form-contact-page .input-control {
    display: block;
    width: 100%;
    padding: 0.625rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #8898aa;
    background-color: #f5f5f5;
    background-clip: padding-box;
    border: none;
    border-radius: 20px;
    -webkit-box-shadow: none;
    box-shadow: none;
    transition: 0.3
}

.form-contact-page .input-control.input-error {
    border-bottom: 3px solid #e92525
}

@media (min-width: 768px) {
    .form-contact-page .input-control {
        font-size:18px;
        line-height: 22px
    }
}

.form-contact-page .input-control:focus {
    background: white;
    border: 1px solid #dcdcdc
}

.form-contact-page .succes {
    display: none;
    text-align: center;
    padding-top: 20px
}

.form-contact-page .succes p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 12px;
    line-height: 18px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .form-contact-page .succes p {
        font-size:23px;
        line-height: 28px;
        margin-left: 20px
    }
}

.section-contact {
    background-color: #e5e5e5;
    padding: 80px 0
}

@media (min-width: 768px) {
    .section-contact {
        padding:45px 0
    }
}

.section-contact .card-title .h1 {
    color: white;
    display: flex;
    position: relative;
    text-align: left;
    max-width: 150px;
    margin: 0 auto 0 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-contact .card-title .h1 {
        max-width:500px;
        margin: 0;
        font-size: 45px
    }
}

@media (min-width: 880px) {
    .section-contact .card-title .h1 {
        max-width:100%;
        margin: 0;
        font-size: 45px;
        letter-spacing: 2px
    }
}

.section-contact .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/layer-smile-white.png');
    width: 36px;
    height: 14px;
    display: inline-block;
    margin-left: 66px;
    background-size: 36px;
    position: absolute;
    right: -65px;
    bottom: 15px
}

@media (min-width: 768px) {
    .section-contact .card-title .h1:after {
        width:127px;
        height: 50px;
        background-size: 127px
    }
}

@media (min-width: 880px) {
    .section-contact .card-title .h1:after {
        position:static
    }
}

.wrapp-list-contact-items .left-items li,.wrapp-list-contact-items .right-items li {
    margin-bottom: 12px
}

.wrapp-list-contact-items .left-items .line-top,.wrapp-list-contact-items .right-items .line-top {
    margin-bottom: 10px
}

.wrapp-list-contact-items .left-items .line-top strong,.wrapp-list-contact-items .right-items .line-top strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 28px;
    line-height: 30px
}

@media (min-width: 768px) {
    .wrapp-list-contact-items .left-items .line-top strong,.wrapp-list-contact-items .right-items .line-top strong {
        font-size:20px;
        line-height: 27px
    }
}

.wrapp-list-contact-items .left-items .line-top strong:before,.wrapp-list-contact-items .right-items .line-top strong:before {
    content: '';
    background-image: url('/assets/images/map-orange.svg');
    background-repeat: no-repeat;
    width: 12px;
    height: 18px;
    display: inline-block;
    margin-right: 3px
}

.wrapp-list-contact-items .left-items .text-botton p,.wrapp-list-contact-items .right-items .text-botton p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-list-contact-items .left-items .text-botton p,.wrapp-list-contact-items .right-items .text-botton p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.container .h5 {
    font-weight: 900;
    font-size: 27px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .container .h5 {
        line-height:85px;
        font-size: 45px
    }
}

.container .h5:after {
    content: '';
    background-image: url('/assets/images/shape-grey.png');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -0.5px
}

.section-smile-club {
    padding: 70px 0
}

.section-smile-club .smile-icon {
    position: absolute;
    top: -150px;
    right: 10px
}

@media (min-width: 768px) {
    .section-smile-club .smile-icon {
        right:128px;
        top: -151px
    }
}

.section-smile-club .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-smile-club .smile-icon svg {
        width:122px
    }
}

.section-smile-club.section-smile-club-inner {
    padding: 70px 0
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner {
        padding:120px 0
    }
}

.section-smile-club.section-smile-club-inner .smile-icon {
    position: absolute;
    top: -130px;
    right: 10px
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner .smile-icon {
        right:128px
    }
}

.section-smile-club.section-smile-club-inner .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-smile-club.section-smile-club-inner .smile-icon svg {
        width:122px
    }
}

.section-smile-club.section-smile-club-inner .card-title {
    margin: 0 25px 25px
}

.section-smile-club.section-smile-club-inner .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg')
}

.section-smile-club.section-smile-club-inner .card-title .h1 span {
    color: #3975fc
}

.section-smile-club .card-title {
    margin-bottom: 25px
}

.section-smile-club .card-title .h1 {
    font-weight: 900;
    font-size: 30px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-smile-club .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-smile-club .card-title .h1:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -17px
}

.section-smile-club .card-title .h1 span {
    color: #ff6c4d
}

.section-smile-club .card-img img {
    width: 100%
}

.section-smile-club .container .link-insta:after {
    content: '';
    background-image: url('/assets/images/shape-light-blue.png');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 55%;
    transform: translateX(-50%);
    bottom: 55px
}

.wrapp-intro-particulier {
    position: relative;
    min-height: 592px;
    background-image: url(/assets/images/intro-particuliers.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-particulier {
        height:85vh;
    }
}

.wrapp-intro-particulier:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-particulier:before {
        height:350px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier:before {
        height:350px
    }
}

.wrapp-intro-particulier .wrapp-btn {
    position: absolute;
    top: 158px;
    left: 50%;
    width: 100%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .wrapp-btn {
        top:240px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .wrapp-btn {
        top:310px
    }
}

.wrapp-intro-particulier .container {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container {
        top:110px
    }
}

.wrapp-intro-particulier .container .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container .card-title {
        margin-top:40px;
        max-width: 1120px
    }
}

.wrapp-intro-particulier .container .card-title .h1 {
    font-size: 24px
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .container .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-particulier .container .card-title .h1 {
        font-size:45px;
        line-height: 55px
    }
}

.wrapp-intro-particulier .embedresize {
    position: relative;
    bottom: -58vh;
    max-width: 73vw;
    margin: auto
}

.wrapp-intro-particulier .embedresize iframe {
    height: 434PX
}

@media (min-width: 768px) {
    .wrapp-intro-particulier .embedresize {
        bottom:-54vh;
        max-width: 600px
    }
}

@media (max-width: 768px) {
    .wrapp-intro-particulier .embedresize {
        bottom:-377px;
        max-width: 100%
    }
}

@media (min-width: 768px) {
    .embedresize {
        max-width:638px;
        overflow: hidden
    }
}

.embedresize {
    position: relative;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.embedresize:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border-radius: 5px;
    opacity: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.embedresize:hover {
    transform: scale(1.1)
}

.embedresize:hover:after {
    opacity: 1
}

.section-intro-slidset .card-title {
    position: relative;
    margin-top: -50px
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title {
        margin-top:-137px
    }
}

.section-intro-slidset .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title p {
        font-size:235px
    }
}

.section-intro-slidset .card-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg)
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong.first {
        margin-top:-86px
    }
}

.section-intro-slidset .card-title strong p {
    display: inline-block;
    position: absolute;
    right: -15px;
    bottom: -25px
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong p {
        right:-52px;
        bottom: -61px
    }
}

@media (min-width: 768px) {
    .section-intro-slidset .card-title strong {
        font-size:128px;
        margin-top: -54px;
        left: 6px
    }
}

.section-intro-slidset .card-descrip p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1'
}

.section-pro-slidset .card-title {
    position: relative
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title {
        margin-top:-137px
    }
}

.section-pro-slidset .card-title p {
    color: #90dade;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title p {
        font-size:175px
    }
}

.section-pro-slidset .card-title strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg)
}

.section-pro-slidset .card-title strong.first {
    margin-top: -86px
}

.section-pro-slidset .card-title strong p {
    display: inline-block;
    position: absolute;
    right: -15px;
    bottom: -25px
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title strong p {
        right:-52px;
        bottom: -61px
    }
}

@media (min-width: 768px) {
    .section-pro-slidset .card-title strong {
        font-size:91px;
        margin-top: -37px;
        left: 6px
    }
}

.section-pro-slidset .card-descrip p {
    color: #707070;
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    font-family: 'Centra No1'
}

.section-opportunities {
    position: relative;
    padding: 60px 0
}

.section-opportunities p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 31px
}

@media (min-width: 768px) {
    .section-opportunities {
        padding:70px 0
    }
}

.section-opportunities .card-img-slids {
    position: absolute;
    top: -35px
}

@media (min-width: 768px) {
    .section-opportunities .card-img-slids {
        top:-60px
    }
}

.section-opportunities .card-img-slids img {
    width: 70px;
    height: 70px
}

@media (min-width: 768px) {
    .section-opportunities .card-img-slids img {
        width:140px;
        height: 140px
    }
}

.section-opportunities .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-opportunities .card-title .h1 {
        font-size:45px;
        line-height: 42px;
        margin-top: 24px
    }
}

.section-opportunities .card-title .h1 span {
    color: #ff6c4d
}

.section-opportunities .video-holder {
    position: relative;
    width: 90%;
    height: 0;
    padding: 25%;
    overflow: hidden
}

@media (min-width: 900px) {
    .section-opportunities .video-holder {
        width:66%;
        padding: 19%
    }
}

.section-opportunities .video-holder iframe,.section-opportunities .video-holder video,.section-opportunities .video-holder .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%
}

.section-opportunities .video-holder iframe img,.section-opportunities .video-holder video img,.section-opportunities .video-holder .overlay img {
    width: 100%
}

.section-opportunities .video-holder .play-video {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    transform: translate(-50%, -50%)
}

.section-opportunities .video-holder.ready .overlay,.section-opportunities .video-holder.is-touch-device .overlay {
    display: none
}

.section-opportunities .video-holder.ready .videowrapp,.section-opportunities .video-holder.is-touch-device .videowrapp {
    z-index: 0
}

.section-opportunities .video-holder.ready .play-video,.section-opportunities .video-holder.is-touch-device .play-video,.section-opportunities .video-holder.ready .text-holder-video,.section-opportunities .video-holder.is-touch-device .text-holder-video {
    z-index: -1
}

.section-opportunities .video-holder .videowrapp {
    z-index: -1
}

.section-opportunities .play-video {
    background-image: url('/assets/images/play.svg');
    font-size: 0;
    border: none;
    background-color: transparent;
    width: 32px;
    height: 32px;
    background-size: 32px;
    transition: 0.3s
}

@media (min-width: 900px) {
    .section-opportunities .play-video {
        width:72px;
        height: 72px;
        background-size: 72px
    }
}

.section-opportunities .text-holder-video {
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 900px) {
    .section-opportunities .text-holder-video {
        bottom:20px
    }
}

.section-opportunities .text-holder-video p {
    text-align: center;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 14px
}

@media (min-width: 900px) {
    .section-opportunities .text-holder-video p {
        font-size:38px;
        line-height: 38px
    }
}

.section-photo-customize {
    padding: 50px 0 30px;
    position: relative
}

@media (min-width: 768px) {
    .section-photo-customize {
        padding:106px 0
    }
}

.section-photo-customize .container {
    padding: 0
}

@media (min-width: 768px) {
    .section-photo-customize .container {
        padding:0 15px
    }
}

.section-photo-customize .smile-icon {
    position: absolute;
    top: -58px;
    right: -5px
}

@media (min-width: 768px) {
    .section-photo-customize .smile-icon {
        top:-58px;
        right: 250px
    }
}

.section-photo-customize .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-photo-customize .smile-icon svg {
        width:122px
    }
}

.section-photo-customize .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-photo-customize .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-photo-customize .row {
    padding: 0
}

@media (min-width: 700px) {
    .section-photo-customize .row {
        padding:40px 0
    }
}

.section-photo-customize .row .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
    .section-photo-customize .row .wrapp-text {
        margin-left:100px
    }
}

.section-photo-customize .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 768px) {
    .section-photo-customize .wrapp-text {
        padding:0
    }
}

.section-photo-customize .wrapp-text .card-title h2 span {
    color: #90dade
}

.section-photo-customize .card-title {
    margin-bottom: 29px
}

.section-photo-customize .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-photo-customize .card-title h2 {
        font-size:45px
    }
}

.section-photo-customize p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-photo-customize p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-photo-customize a {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-photo-customize a {
        font-size:20px;
        line-height: 45px
    }
}

.section-photo-customize .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-photo-customize .card-img img {
        max-width:620px
    }
}

.section-pro-customize {
    padding: 40px 0;
    position: relative
}

@media (min-width: 768px) {
    .section-pro-customize {
        padding:106px 0
    }
}

.section-pro-customize.pro-customize-sets .row .card-title h2 span {
    color: #ff6c4d
}

.section-pro-customize.pro-customize-sets a {
    color: #ff6c4d
}

.section-pro-customize .smile-icon {
    position: absolute;
    top: -58px;
    right: -5px
}

@media (min-width: 768px) {
    .section-pro-customize .smile-icon {
        top:-58px;
        right: 250px
    }
}

.section-pro-customize .smile-icon svg {
    width: 70px
}

@media (min-width: 768px) {
    .section-pro-customize .smile-icon svg {
        width:122px
    }
}

.section-pro-customize .card-title .h1 {
    font-weight: 900;
    font-size: 38px;
    line-height: 39px;
    color: #707070;
    position: relative
}

@media (min-width: 768px) {
    .section-pro-customize .card-title .h1 {
        line-height:85px;
        font-size: 45px
    }
}

.section-pro-customize .row {
    padding: 0
}

@media (min-width: 700px) {
    .section-pro-customize .row {
        padding:40px 0
    }
}

.section-pro-customize .row .wrapp-text {
    margin-left: 0px;
    margin-right: 0
}

@media (min-width: 1024px) {
    .section-pro-customize .row .wrapp-text {
        margin-left:100px
    }
}

.section-pro-customize .row .card-title {
    margin-bottom: 29px
}

.section-pro-customize .row .card-title h2 {
    font-family: 'Centra No1';
    letter-spacing: -1.8px;
    line-height: 50px;
    color: #707070;
    font-size: 28px;
    line-height: 1.2
}

@media (min-width: 700px) {
    .section-pro-customize .row .card-title h2 {
        font-size:45px
    }
}

.section-pro-customize .row .card-title h2 span {
    color: #90dade
}

.section-pro-customize .wrapp-text {
    padding: 45px 35px
}

@media (min-width: 700px) {
    .section-pro-customize .wrapp-text {
        padding:0
    }
}

.section-pro-customize p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin-bottom: 15px
}

@media (min-width: 700px) {
    .section-pro-customize p {
        font-size:18px;
        line-height: 28px;
        margin-bottom: 31px
    }
}

.section-pro-customize a {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 700px) {
    .section-pro-customize a {
        font-size:20px;
        line-height: 45px
    }
}

.section-pro-customize .card-img img {
    width: 100%
}

@media (min-width: 768px) {
    .section-pro-customize .card-img img {
        max-width:620px
    }
}

.section-blog .wrapp-blog {
    padding: 65px 0
}

.section-blog.custom-text .card-title p {
    color: #fff
}

.section-blog.custom-text .card-title strong {
    color: #ffe9db
}

.section-blog .card-title {
    position: relative
}

.section-blog .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    display: inline-block;
    margin: 0;
    z-index: 1
}

@media (min-width: 768px) {
    .section-blog .card-title p {
        font-size:120px
    }
}

.section-blog .card-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: bold;
    display: block;
    z-index: 0;
    margin-top: -26px;
    position: relative;
    left: 4px;
    transform: rotate(-3deg);
    display: inline-block
}

.section-blog .card-title strong:after {
    content: \"\";
    background-image: url('/assets/images/underline.svg');
    background-repeat: no-repeat;
    display: block;
    width: 56px;
    height: 15px;
    position: absolute;
    background-size: 56px;
    bottom: 0;
    right: 21px
}

@media (min-width: 768px) {
    .section-blog .card-title strong:after {
        width:60px;
        height: 26px;
        background-size: 62px;
        right: 84px;
        bottom: -9px
    }
}

@media (min-width: 768px) {
    .section-blog .card-title strong {
        font-size:90px;
        margin-top: -54px;
        left: 6px
    }
}

.section-blog .card-info {
    max-width: 900px
}

.section-blog .card-info a {
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

.section-blog .card-info a:hover {
    text-decoration: underline
}

@media (min-width: 768px) {
    .section-blog .card-info a {
        font-size:24px
    }
}

.icon-user img {
    border-radius: 50px
}

.wrapp-intro-rpgd {
    position: relative;
    min-height: 370px;
    background-image: url('/assets/images/rgpd-4x.png');
    background-repeat: no-repeat;
    background-position: center 40px;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-rpgd {
        min-height:600px;
        background-position: center 50px
    }
}

@media (min-width: 1300px) {
    .wrapp-intro-rpgd {
        min-height:auto;
        height: 100vh;
        height: calc(var(--vh, 1vh) * 100);
        background-position: initial
    }
}

.wrapp-intro-rpgd:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-rpgd:before {
        height:250px
    }
}

.wrapp-intro-rpgd .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-content-rgpd {
    padding: 37px 0
}

@media (min-width: 768px) {
    .wrapp-content-rgpd {
        padding:80px 0
    }
}

.wrapp-content-rgpd .card-text h2 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    font-family: 'Centra No1';
    color: #707070
}

@media (min-width: 768px) {
    .wrapp-content-rgpd .card-text h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.wrapp-content-rgpd ul li {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-rgpd ul li {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-rgpd ul li a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-rgpd ul li a:hover {
    color: #ff6c4d
}

.wrapp-content-rgpd p {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-rgpd p {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-intro-mention {
    position: relative;
    min-height: 600px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1300px) {
    .wrapp-intro-mention {
        min-height:auto;
        height: 100vh;
        height: calc(var(--vh, 1vh) * 100);
        background-position: initial
    }
}

.wrapp-intro-mention:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-mention:before {
        height:250px
    }
}

.wrapp-intro-mention .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-intro-jobs {
    position: relative;
    background-color: #f67449;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

.wrapp-intro-jobs.wrapp-intro-jobs1 {
    background-color: #feccd5
}

.wrapp-intro-jobs:before {
    content: '';
    width: 100%;
    height: 105px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-jobs:before {
        height:250px
    }
}

.wrapp-intro-jobs .card-img img {
    width: 100%;
    z-index: -2
}

.wrapp-intro-jobs .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-content-mention,.wrapp-content-jobs {
    padding: 37px 0
}

@media (min-width: 768px) {
    .wrapp-content-mention,.wrapp-content-jobs {
        padding:80px 0
    }
}

.wrapp-content-mention .card-text h2,.wrapp-content-jobs .card-text h2 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    font-family: 'Centra No1';
    color: #707070
}

@media (min-width: 768px) {
    .wrapp-content-mention .card-text h2,.wrapp-content-jobs .card-text h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.wrapp-content-mention ul li,.wrapp-content-jobs ul li {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention ul li,.wrapp-content-jobs ul li {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-mention ul li a,.wrapp-content-jobs ul li a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention ul li a:hover,.wrapp-content-jobs ul li a:hover {
    color: #ff6c4d
}

.wrapp-content-mention .list-marker li::before,.wrapp-content-jobs .list-marker li::before {
    content: '•';
    color: #707070;
    display: inline-block;
    margin-right: 5px
}

.wrapp-content-mention p,.wrapp-content-jobs p {
    color: #707070;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention p,.wrapp-content-jobs p {
        font-size:18px;
        line-height: 24px
    }
}

.wrapp-content-mention p a,.wrapp-content-jobs p a {
    color: #707070;
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention p a:hover,.wrapp-content-jobs p a:hover {
    color: #ff6c4d
}

.wrapp-content-mention a,.wrapp-content-jobs a {
    text-decoration: none;
    transition: 0.3s
}

.wrapp-content-mention a:hover,.wrapp-content-jobs a:hover {
    opacity: 0.8
}

.wrapp-content-mention .link-line,.wrapp-content-jobs .link-line {
    border-bottom: 3px solid #ff6c4d
}

.wrapp-content-mention .link-line .link,.wrapp-content-jobs .link-line .link {
    color: #ff6c4d;
    display: block;
    font-size: 16px;
    font-weight: 300;
    line-height: 45px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .wrapp-content-mention .link-line .link,.wrapp-content-jobs .link-line .link {
        font-size:18px;
        line-height: 24px
    }
}

@media (max-width: 768px) {
    .wrapp-content-mention .wrapp-btns .btn,.wrapp-content-jobs .wrapp-btns .btn {
        padding:6px 12px
    }
}

.wrapp-intro-les-option:before {
    content: '';
    width: 100%;
    height: 300px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 80%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-les-option:before {
        height:340px;
        background-size: 122% 101%
    }
}

.wrapp-intro-les-option .wrapp-btn {
    position: relative;
    top: 25px
}

.wrapp-intro-les-option .card-title {
    margin-top: 78px
}

.wrapp-intro-les-option .card-title .h1 {
    font-size: 38px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-les-option .card-title .h1 {
        font-size:45px;
        line-height: 53px
    }
}

.wrapp-accordion {
    padding: 10px
}

.wrapp-accordion .card-title p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .wrapp-accordion .card-title p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-accordion .card-title p strong {
    font-family: 'Centra No1'
}

.wrapp-accordion li.active .opener img {
    transform: rotate(-180deg)
}

.wrapp-accordion .opener {
    border-bottom: 3px solid #90dade;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 700;
    line-height: 20px;
    text-decoration: none
}

@media (min-width: 768px) {
    .wrapp-accordion .opener {
        font-size:18px;
        line-height: 28px
    }
}

.wrapp-accordion .opener:hover p {
    color: #ff6c4d
}

.wrapp-accordion .opener p span {
    color: #90dade
}

.wrapp-accordion .opener img {
    min-width: 20px;
    height: 11px;
    display: block;
    transition: 0.3s
}

.wrapp-accordion .wrapp-accordion-content {
    padding: 38px 0
}

.wrapp-accordion .wrapp-accordion-content .card-img {
    max-width: 200px
}

.wrapp-accordion .wrapp-accordion-content .card-img img {
    width: 100px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-accordion .wrapp-accordion-content .card-img img {
        width: auto
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text {
    flex-direction: column
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .card-text {
        flex-direction:row
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text p {
    color: #707070;
    font-size: 14px;
    line-height: 21px;
    font-family: 'Centra No1';
    font-weight: 300
}

@media (min-width: 768px) {
    .wrapp-accordion .wrapp-accordion-content .card-text p {
        font-size:18px;
        line-height: 28px
    }
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .card-text p {
        max-width:400px
    }
}

.wrapp-accordion .wrapp-accordion-content .card-text p span {
    font-family: 'Centra No1';
    text-decoration: underline
}

.wrapp-accordion .wrapp-accordion-content .wrapp-btn {
    width: 100%
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .wrapp-btn {
        width:auto
    }
}

.wrapp-accordion .wrapp-accordion-content .btn {
    width: 100%;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    padding: 5px 42px
}

@media (min-width: 900px) {
    .wrapp-accordion .wrapp-accordion-content .btn {
        min-width:198px
    }
}

.wrapp-intro-faq-page {
    position: relative;
    background-color: #e46a44;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page {
        height:400px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page {
        height:300px
    }
}

.wrapp-intro-faq-page:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 310px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page:before {
        height:400px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page:before {
        height:300px
    }
}

.wrapp-intro-faq-page .container-wrapp {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp {
        top:110px
    }
}

.wrapp-intro-faq-page .container-wrapp .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp .card-title {
        max-width:1120px
    }
}

.wrapp-intro-faq-page .container-wrapp .card-title .h1 {
    font-size: 38px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-page .container-wrapp .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-faq-page .container-wrapp .card-title .h1 {
        font-size:82px
    }
}

.section-intro-autocomplite {
    position: relative
}

.section-intro-autocomplite .wrapp-autocomplete {
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .section-intro-autocomplite .wrapp-autocomplete {
        top:-50px
    }
}

.section-intro-autocomplite .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: center;
    outline: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form input {
        font-size:18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 38px
    }
}

.section-intro-autocomplite .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-intro-autocomplite .autocomplete-form .ac-results {
    min-width: 300px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
    background-color: #fff;
    border-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto
}

.section-intro-autocomplite .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .section-intro-autocomplite .autocomplete-form .ac-results {
        min-width:600px;
        height: auto
    }
}

.section-intro-autocomplite .autocomplete-form .ac-results li {
    cursor: pointer
}

.section-intro-autocomplite .autocomplete-form .ac-results li:hover {
    color: #e46a44
}

.section-intro-autocomplite .card-img {
    padding: 15px 0 0
}

@media (min-width: 768px) {
    .section-intro-autocomplite .card-img {
        padding:50px 0 0
    }
}

.section-intro-autocomplite .card-img img {
    width: inherit;
    height: auto
}

.section-popular-question {
    padding: 80px 0
}

.section-popular-question .box-item {
    padding: 37px 34px 37px;
    border-radius: 17px;
    border: 3px solid #90dade;
    background-color: #90dade;
    margin-bottom: 30px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-popular-question .box-item {
        padding:58px 34px 56px
    }
}

.section-popular-question .box-item:hover {
    background-color: #fff
}

.section-popular-question .box-item:hover strong,.section-popular-question .box-item:hover p {
    color: #90dade
}

.section-popular-question .box-item strong {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 15px;
    height: 60px
}

.section-popular-question .box-item p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    width: 100%
}

.wrapp-intro-faq:before {
    content: '';
    width: 100%;
    height: 78px;
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-faq:before {
        height:300px
    }
}

.wrapp-intro-faq .card-title {
    margin-top: 110px
}

.wrapp-intro-faq .card-title .h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-faq .card-title .h1 {
        font-size:57px;
        line-height: 85px
    }
}

.wrapp-intro-faq .card-title .h1 img {
    width: 138px
}

@media (min-width: 768px) {
    .wrapp-intro-faq .card-title .h1 img {
        width:auto
    }
}

.wrapp-intro-faq.client:before {
    background-image: url('/assets/images/bg-light-blue-round.jpg')
}

.wrapp-intro-faq.prospect:before {
    background-image: url('/assets/images/bg-rose-clair-round.jpg')
}

.wrapp-intro-faq-content {
    padding: 120px 0
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content {
        padding:230px 0
    }
}

.wrapp-intro-faq-content .card-title h2 {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 700;
    font-size: 28px;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-title h2 {
        font-size:45px;
        line-height: 50px;
        letter-spacing: -1.8px
    }
}

.wrapp-intro-faq-content .card-text {
    position: relative
}

.wrapp-intro-faq-content .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-intro-faq-content .card-text a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .card-text a {
        font-size:20px;
        font-weight: 300;
        line-height: 45px
    }
}

.wrapp-intro-faq-content .list-category li a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 300;
    line-height: 45px
}

.wrapp-intro-faq-content .autocomplete-form {
    position: relative;
    width: 100%
}

.wrapp-intro-faq-content .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: center;
    outline: none;
    box-sizing: border-box;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form input {
        box-sizing:border-box;
        font-size: 18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 38px
    }
}

.wrapp-intro-faq-content .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-intro-faq-content .autocomplete-form .ac-results {
    min-width: 300px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 80px;
    left: 0%;
    padding: 0;
    background-color: #fff;
    border-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto
}

.wrapp-intro-faq-content .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .wrapp-intro-faq-content .autocomplete-form .ac-results {
        min-width:100%;
        height: 300px
    }
}

@media (min-width: 1080px) {
    .wrapp-intro-faq-content .autocomplete-form .ac-results {
        min-width:600px;
        height: auto
    }
}

.wrapp-intro-faq-content .autocomplete-form .ac-results li {
    cursor: pointer
}

.wrapp-intro-faq-content .autocomplete-form .ac-results li:hover {
    color: #e46a44
}

.wrapp-intro-article-blog {
    position: relative;
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1024px) {
    .wrapp-intro-article-blog {
        min-height:auto;
        height: 100%;
        min-height: 600px
    }
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog {
        min-height:800px
    }
}

.wrapp-intro-article-blog:after {
    content: '';
    width: 100%;
    height: 450px;
    background-image: url('/assets/images/big-layer.png');
    display: block;
    position: absolute;
    bottom: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog:after {
        background-size:100%;
        height: 750px
    }
}

.wrapp-intro-article-blog .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .wrapp-intro-article-blog .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .wrapp-intro-article-blog .bg-strech {
        min-height:800px
    }
}

.wrapp-content-article-blog {
    position: relative;
    top: -68px
}

@media (min-width: 1335px) {
    .wrapp-content-article-blog {
        top:-53px
    }
}

@media (min-width: 1440px) {
    .wrapp-content-article-blog {
        top:-73px
    }
}

.wrapp-content-article-blog .card-title .h1 {
    z-index: 5
}

.wrapp-content-article-blog .card-descrip {
    max-width: 840px;
    margin: 0 auto
}

.wrapp-content-article-blog .card-descrip p {
    z-index: 5;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 1024px) {
    .wrapp-content-article-blog .card-descrip p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.wrapp-content-article-blog .next-section {
    z-index: 5;
    position: relative;
    top: 40px
}

.wrapp-content-article-blog .next-section.bounce {
    -moz-animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite
}

.wrapp-popup-social {
    position: fixed;
    z-index: 99;
    bottom: 10px;
    right: 10px
}

@media (min-width: 768px) {
    .wrapp-popup-social {
        top:50%;
        right: 15px;
        bottom: inherit
    }
}

.wrapp-popup-social .popup-social {
    position: relative
}

.wrapp-popup-social .popup-active .animate-top {
    transform: translate(0, 0) translate3d(0px, 0px, 0px);
    opacity: 1
}

.wrapp-popup-social .popup-active .open i {
    display: none
}

.wrapp-popup-social .popup-active .open img {
    display: block
}

.wrapp-popup-social .popup-active .popup {
    top: -205px
}

.wrapp-popup-social .open {
    width: 58px;
    height: 60px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    background-color: #404040;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    z-index: 99
}

.wrapp-popup-social .open:hover {
    opacity: 0.8
}

.wrapp-popup-social .open i {
    display: block;
    font-size: 24px
}

.wrapp-popup-social .open img {
    display: none
}

.wrapp-popup-social .popup {
    position: absolute;
    top: -42px;
    left: -6px;
    transition: 0.3s;
    z-index: 0
}

.wrapp-popup-social .popup ul a:hover {
    opacity: 0.6
}

.wrapp-popup-social .text-button {
    color: #3975fc;
    font-family: 'Lucky Fellas';
    font-size: 42px;
    font-weight: 400;
    position: absolute;
    left: -172px;
    top: -36px;
    z-index: 0;
    display: none
}

@media (min-width: 768px) {
    .wrapp-popup-social .text-button {
        display:block
    }
}

.wrapp-popup-social .text-button:after {
    content: '';
    background-image: url('/assets/images/arrow-color.png');
    width: 68px;
    height: 40px;
    display: block;
    position: relative;
    left: 82px;
    top: -20px
}

.section-user-blog-post {
    padding: 72px 0
}

.section-user-blog-post img {
    width: 100%;
    border-radius: 26px
}

.section-user-blog-post .blog-full-image {
    width: 150%;
    margin-left: -25%
}

.section-user-blog-post h2 {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    line-height: 30px
}

@media (min-width: 768px) {
    .section-user-blog-post h2 {
        font-size:45px;
        line-height: 50px
    }
}

.section-user-blog-post .card-header {
    background-color: transparent;
    border: none;
    padding: 0 15px 30px
}

@media (min-width: 1024px) {
    .section-user-blog-post .card-header {
        padding:0 160px 80px
    }
}

.section-user-blog-post .card-text {
    padding: 0 15px 30px
}

@media (min-width: 1024px) {
    .section-user-blog-post .card-text {
        padding:0 160px 57px
    }
}

.section-user-blog-post .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .section-user-blog-post .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-user-blog-post .card-text .card-title {
    margin-bottom: 40px
}

.section-user-blog-post .card-img {
    padding-bottom: 73px
}

.section-user-blog-post .card-img img {
    width: 100%
}

.section-user-blog-post .card-img .name-autor {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    line-height: 15px;
    align-self: flex-start
}

@media (min-width: 768px) {
    .section-user-blog-post .card-img .name-autor {
        line-height:25px;
        font-size: 16px
    }
}

.section-user-blog-post .list-category a {
    border-radius: 17px;
    border: 1px solid #404040;
    text-decoration: none;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    transition: 0.3s;
    padding: 5px 9px
}

@media (min-width: 768px) {
    .section-user-blog-post .list-category a {
        font-size:13px;
        font-weight: 300;
        letter-spacing: -0.52px;
        padding: 10px 24px
    }
}

.section-user-blog-post .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.section-user-blog-post .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: underline;
    transition: 0.3s
}

.section-user-blog-post .wrapp-user-info .name a:hover {
    text-decoration: none
}

.section-user-blog-post .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

.section-user-blog-post .card-all-info-user .card-title h3 {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700
}

.section-user-blog-post .card-all-info-user .card-title h3 p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 31px;
    font-weight: 400;
    margin: 0;
    display: inline-block
}

.section-user-blog-post .card-all-info-user .card-desrip {
    margin-top: -20px;
    margin-bottom: 35px
}

.section-user-blog-post .card-all-info-user .card-desrip p {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 12px;
    font-weight: 300
}

.section-user-blog-post .card-img-user {
    position: relative
}

.section-user-blog-post .card-img-user a {
    position: absolute;
    bottom: 0;
    right: 0;
    max-width: 35px;
    border-radius: 50%;
    background-color: #fff;
    padding: 0px;
    text-decoration: none
}

.section-user-blog-post .card-img-user a .icon-linked-color {
    font-size: 24px
}

.card-like-post #preloader {
    display: none;
    height: 30px;
    width: 30px;
    border: 5px solid #4788c1;
    border-top: 5px solid #ff6c4d;
    border-radius: 50%;
    animation: rotate 1s infinite linear
}

@keyframes rotate {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg)
    }
}

.card-like-post .success-message {
    display: none
}

.card-like-post .title {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 50px
}

@media (min-width: 768px) {
    .card-like-post .title {
        font-size:28px;
        font-weight: 700;
        letter-spacing: -1.12px;
        line-height: 50px
    }
}

.card-like-post ul li a {
    text-decoration: none
}

.card-like-post ul li a:hover span {
    color: #ffc10e
}

.card-like-post ul li a span {
    font-size: 31px;
    color: #cbcbcb;
    transition: 0.3s
}

.card-like-post.vote-success .vote-holder {
    display: none
}

.card-like-post.vote-success .success-message {
    display: block
}

.card-like-post.vote-loading #preloader {
    display: block
}

.section-photo-blog {
    position: relative
}

.section-photo-blog:after {
    content: '';
    background-image: url('/assets/images/slide-bg-bottom.png');
    display: block;
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: contain;
    z-index: 1;
    position: absolute;
    height: 600px;
    bottom: 0
}

@media (min-width: 700px) {
    .section-photo-blog:after {
        background-image:url('/assets/images/slide-bg-bottom.png');
        background-size: contain
    }
}

.section-photo-blog .card-img img {
    width: 100%
}

.section-photo-blog .card-text h1 {
    font-size: 45px;
    font-weight: 900;
    color: #707070;
    font-size: 38px;
    line-height: 1.2
}

@media (min-width: 1325px) {
    .section-photo-blog .card-text h1 {
        font-size:45px
    }
}

.section-photo-blog .card-text h1 span {
    color: #3975fc
}

.section-photo-blog .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-photo-blog .card-text a {
    position: relative;
    z-index: 99
}

.section-related-articles .card-title h3 {
    font-family: 'Centra No1';
    font-size: 23px;
    line-height: 39px;
    color: #fff;
    position: relative
}

@media (min-width: 768px) {
    .section-related-articles .card-title h3 {
        font-size:39px;
        line-height: 39px
    }
}

.section-related-articles .card-title h3 span {
    color: #3975fc
}

.section-related-articles .card-title h3:after {
    content: '';
    background-image: url('/assets/images/shape-article.png');
    background-repeat: no-repeat;
    width: 149px;
    height: 27px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -20px
}

.section-smile-club-bordeaux .slide-related-articles .slide-item {
    max-width: 400px;
    opacity: 0.5
}

.section-smile-club-bordeaux .slide-related-articles .slick-center,.section-smile-club-bordeaux .slide-related-articles .slick-active {
    opacity: 1
}

.slide-related-articles .slide-item {
    max-width: 306px
}

@media (min-width: 768px) {
    .slide-related-articles .slide-item {
        max-width:inherit
    }
}

.slide-related-articles .slick-dots {
    padding: 0 25px;
    display: flex !important;
    justify-content: center;
    align-items: center
}

.slide-related-articles .slick-dots li {
    margin: 10px;
    font-size: 0
}

.slide-related-articles .slick-dots li.slick-active button:before {
    content: '';
    background-color: #ff6c4d;
    opacity: 1
}

.slide-related-articles .slick-dots li.slick-active button:hover {
    opacity: 0.8
}

.slide-related-articles .slick-dots button {
    width: 8px;
    height: 8px;
    border: 1px solid #ff6c4d;
    z-index: 0;
    position: relative;
    background-color: transparent;
    outline: none;
    border-radius: 50%;
    padding: 0;
    cursor: pointer
}

.slide-related-articles .slick-dots button:before {
    content: '';
    font-family: 'slick';
    position: absolute;
    top: -1px;
    left: -1px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    padding: 0;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased;
    z-index: 2
}

.slide-related-articles .card-box {
    margin: 10px
}

.slide-related-articles .card-box .card-body {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    background-color: #fff;
    position: relative;
    min-height: 122px
}

.slide-related-articles .card-box .list-category {
    position: absolute;
    bottom: 0;
    left: 0
}

.slide-related-articles .card-box .list-category a {
    white-space: nowrap;
    border-radius: 10px;
    background-color: #707070;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    padding: 7px 5px;
    text-decoration: none;
    border: 1px solid transparent;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .list-category a {
        padding:7px 16px
    }
}

.slide-related-articles .card-box .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.slide-related-articles .card-box .share-blog {
    position: absolute;
    background-color: #ff6c4d;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    padding: 16px 10px;
    top: -30px;
    right: 0;
    text-decoration: none
}

.slide-related-articles .card-box .share-blog i {
    font-size: 20px
}

.slide-related-articles .card-box .share-blog span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

.slide-related-articles .card-box .title a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: -0.8px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .title a {
        font-size:20px
    }
}

.slide-related-articles .card-box .title a:hover {
    color: #ff6c4d
}

.slide-related-articles .card-box .card-img {
    position: relative;
    height: 218px;
    overflow: hidden
}

.slide-related-articles .card-box .card-img img {
    width: 100%;
    border-radius: 20px
}

.slide-related-articles .card-box .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .wrapp-user-info .name a {
        font-size:14px
    }
}

.slide-related-articles .card-box .wrapp-user-info .name a:hover {
    color: #ff6c4d
}

.slide-related-articles .card-box .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 10px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

@media (min-width: 768px) {
    .slide-related-articles .card-box .wrapp-user-info .post-date span {
        font-size:14px
    }
}

.wrapp-intro-pro {
    position: relative;
    min-height: 700px;
    background-image: url('/assets/images/pro.png');
    background-repeat: no-repeat;
    background-position: center 250px;
    background-size: cover;
    z-index: 0
}

.wrapp-intro-pro:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1;
    height: 230px
}

@media (min-width: 768px) {
    .wrapp-intro-pro:before {
        height:310px
    }
}

.wrapp-intro-pro .wrapp-btn {
    position: absolute;
    top: 158px;
    left: 50%;
    width: 100%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .wrapp-intro-pro .wrapp-btn {
        top:240px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .wrapp-btn {
        top:265px
    }
}

.wrapp-intro-pro .container {
    position: absolute;
    top: 132px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container {
        top:110px
    }
}

.wrapp-intro-pro .container .card-title {
    max-width: 700px;
    margin: 0 auto
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container .card-title {
        max-width:1120px
    }
}

.wrapp-intro-pro .container .card-title .h1 {
    font-size: 24px
}

@media (min-width: 768px) {
    .wrapp-intro-pro .container .card-title .h1 {
        font-size:42px
    }
}

@media (min-width: 1325px) {
    .wrapp-intro-pro .container .card-title .h1 {
        font-size:45px;
        padding-top: 36px
    }
}

.section-nos-solution {
    font-family: 'Centra No1';
    padding: 0 0 60px;
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0
}

.section-nos-solution img {
    width: 100%;
    padding: 3rem 0
}

@media (min-width: 1024px) {
    .section-nos-solution img {
        padding:6rem !important
    }
}

.section-nos-solution .container {
    position: relative;
    z-index: 5
}

.section-nos-solution .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .section-nos-solution .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .section-nos-solution .bg-strech {
        min-height:800px
    }
}

.section-nos-solution .card-title {
    text-align: center
}

.section-nos-solution .card-title .h1 {
    position: relative
}

.section-nos-solution .card-title .h1:after {
    content: '';
    width: 60px;
    height: 20px;
    background-image: url('/assets/images/shape-blue.png');
    display: block;
    position: absolute;
    background-size: 60px;
    bottom: -23px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 1024px) {
    .section-nos-solution .card-title .h1:after {
        width:120px;
        height: 40px;
        background-size: 120px;
        bottom: -46px
    }
}

.section-nos-solution .card-descrip {
    max-width: 840px;
    margin: 20px auto;
    position: relative;
    top: 35px
}

.section-nos-solution .card-descrip p {
    color: #707070;
    font-size: 18px;
    line-height: 28px;
    font-weight: 300
}

.section-nos-solution .card-descrip p a {
    color: #707070
}

.section-nos-solution .sub-title {
    position: relative;
    top: 84px
}

@media (min-width: 600px) {
    .section-nos-solution .sub-title {
        top:64px
    }
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title {
        top:137px
    }
}

@media (min-width: 1335px) {
    .section-nos-solution .sub-title {
        top:77px
    }
}

.section-nos-solution .sub-title strong {
    color: #3975fc;
    font-size: 71px;
    font-weight: 900;
    line-height: 86px;
    text-transform: uppercase;
    font-family: 'Centra No1';
    margin: 0;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title strong {
        font-size:95px;
        font-weight: 900
    }
}

.section-nos-solution .sub-title p {
    color: #ffad9f;
    font-family: 'Lucky Fellas';
    font-size: 87px;
    font-weight: 400;
    position: relative;
    top: -53px
}

@media (min-width: 1024px) {
    .section-nos-solution .sub-title p {
        font-size:90px;
        font-weight: 400
    }
}

.section-images-pro {
    margin-top: -141px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-images-pro {
        margin-top:-231px
    }
}

.wrapp-intro-category-faq {
    padding: 100px 0 50px
}

@media (min-width: 768px) {
    .wrapp-intro-category-faq {
        padding:250px 0 100px
    }
}

.wrapp-intro-category-faq .card-icon img {
    width: 68px
}

@media (min-width: 768px) {
    .wrapp-intro-category-faq .card-icon img {
        width:168px
    }
}

.wrapp-intro-category-faq ul li {
    border-bottom: 3px solid #ff6c4d;
    margin-bottom: 22px
}

.wrapp-intro-category-faq ul a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px;
    text-decoration: none
}

.wrapp-intro-category-faq .back-link {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 20px;
    font-weight: 300;
    line-height: 45px;
    text-decoration: none
}

.wrapp-intro-blog {
    position: relative;
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0
}

@media (min-width: 1335px) {
    .wrapp-intro-blog {
        min-height:515px
    }
}

.section-intro-blog-contet {
    position: relative;
    background-repeat: no-repeat;
    background-position: top;
    background-size: 1024px;
    z-index: 0;
    background-image: url('/assets/images/union.png');
    padding: 64px 0;
    margin-top: -138px
}

@media (min-width: 768px) {
    .section-intro-blog-contet {
        padding:45px 0;
        margin-top: -138px
    }
}

@media (min-width: 1024px) {
    .section-intro-blog-contet {
        min-height:auto;
        height: 100%;
        background-size: 100% 100%;
        background-position: center;
        padding: 112px 0;
        margin-top: -138px
    }
}

@media (min-width: 1335px) {
}

.section-intro-blog-contet .hidden-post {
    display: none
}

.section-intro-blog-contet .autocomplete-form .instantsearch {
    position: relative
}

.section-intro-blog-contet .autocomplete-form .instantsearch.results-open input {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.section-intro-blog-contet .autocomplete-form .instantsearch .card-icon {
    position: absolute;
    right: 13px;
    top: 50%;
    transform: translateY(-50%)
}

.section-intro-blog-contet .autocomplete-form input {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 43px;
    background-color: #fff;
    border: none;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    padding: 13px 77px;
    text-align: left;
    outline: none;
    max-width: 300px;
    margin: 0 auto;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form input {
        font-size:18px;
        font-weight: 300;
        line-height: 28px;
        padding: 18px 55px 18px 20px;
        max-width: inherit;
        min-width: 520px
    }
}

.section-intro-blog-contet .autocomplete-form input::placeholder {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 13px;
    font-weight: 300;
    line-height: 17px;
    outline: none;
    color: #afafaf
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form input::placeholder {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results {
    min-width: 294px;
    -moz-box-shadow: 2px 13px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 2px 13px 10px rgba(0, 0, 0, 0.2);
    display: block;
    width: 100%;
    position: absolute;
    top: 43px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    padding: 15px;
    height: 184px;
    overflow: auto;
    z-index: 5;
    -webkit-appearance: none
}

.section-intro-blog-contet .autocomplete-form .ac-results.hidden-results {
    display: none
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form .ac-results {
        min-width:100%;
        width: auto;
        height: auto;
        padding: 0 30px 30px;
        top: 63px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .section-intro-blog-contet .autocomplete-form .ac-results {
        min-width:100%;
        width: 100%;
        top: 56px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results li {
    display: flex;
    cursor: pointer
}

.section-intro-blog-contet .autocomplete-form .ac-results li:first-child {
    border-top: 1px solid #f4f4f4;
    padding-top: 10px
}

.section-intro-blog-contet .autocomplete-form .ac-results li:hover .title {
    color: #e46a44
}

.section-intro-blog-contet .autocomplete-form .ac-results li:hover .img {
    opacity: 0.6
}

.section-intro-blog-contet .autocomplete-form .ac-results .img {
    width: 55px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px
}

.section-intro-blog-contet .autocomplete-form .ac-results .img img {
    width: 55px;
    height: 54px;
    border-radius: 50%
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-intro-blog-contet .autocomplete-form .ac-results .img img {
        width: auto
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results .title {
    color: #000;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 20px;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .autocomplete-form .ac-results .title {
        font-size:18px;
        line-height: 40px
    }
}

.section-intro-blog-contet .autocomplete-form .ac-results .title:hover {
    color: #e46a44
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li {
    margin-right: 15px;
    color: #696969;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    transition: 0.3s;
    letter-spacing: -0.44px;
    display: flex;
    align-items: center
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:first-child {
    border-top: none;
    padding-top: 0
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:last-child:after {
    content: none
}

.section-intro-blog-contet .autocomplete-form .ac-results .tags li:after {
    content: '';
    width: 4px;
    height: 1px;
    background-color: #696969;
    display: block;
    margin-left: 10px
}

.section-intro-blog-contet .list-links a {
    font-size: 12px;
    line-height: 39px;
    padding: 0px 7px
}

.section-intro-blog-contet .list-links a.active {
    background-color: #ff6c4d;
    color: #fff
}

@media (min-width: 768px) {
    .section-intro-blog-contet .list-links a {
        font-size:20px;
        padding: 4px 32px
    }
}

.section-intro-blog-contet .card-box {
    margin: 10px
}

.section-intro-blog-contet .card-box .card-body {
    position: relative;
    padding: 9px 8px 25px 0
}

.section-intro-blog-contet .card-box .list-category {
    position: absolute;
    bottom: 0;
    left: 0
}

.section-intro-blog-contet .card-box .list-category a {
    border-radius: 17px;
    border: 1px solid #fff;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.44px;
    line-height: 20px;
    padding: 7px 5px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .list-category a {
        padding:7px 16px;
        font-size: 15px
    }
}

.section-intro-blog-contet .card-box .list-category a:hover {
    color: #ff6c4d;
    border: 1px solid #ff6c4d;
    background-color: transparent
}

.section-intro-blog-contet .card-box .share-blog {
    position: absolute;
    background-color: #ff6c4d;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    padding: 16px 10px;
    top: -30px;
    right: 0;
    text-decoration: none
}

.section-intro-blog-contet .card-box .share-blog i {
    font-size: 20px
}

.section-intro-blog-contet .card-box .share-blog span {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 22px;
    font-weight: 300;
    letter-spacing: -0.52px;
    line-height: 20px
}

.section-intro-blog-contet .card-box .title a {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 17px;
    font-weight: 700;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .title a {
        font-size:19px;
        line-height: 23px
    }
}

.section-intro-blog-contet .card-box .title a:hover {
    color: #ff6c4d
}

.section-intro-blog-contet .card-box .card-img {
    position: relative
}

.section-intro-blog-contet .card-box .card-img img {
    width: 100%;
    border-radius: 20px
}

.section-intro-blog-contet .card-box .wrapp-user-info {
    margin-bottom: 3rem
}

.section-intro-blog-contet .card-box .wrapp-user-info .name a {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 11px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .wrapp-user-info .name a {
        font-size:14px
    }
}

.section-intro-blog-contet .card-box .wrapp-user-info .name a:hover {
    color: #ff6c4d
}

.section-intro-blog-contet .card-box .wrapp-user-info .name {
    text-decoration: underline
}

.section-intro-blog-contet .card-box .wrapp-user-info .post-date span {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 10px;
    font-weight: 300;
    letter-spacing: -0.56px;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-intro-blog-contet .card-box .wrapp-user-info .post-date span {
        font-size:14px
    }
}

.section-intro-blog-contet .filter-col {
    display: none
}

@media (min-width: 768px) {
    .section-intro-blog-contet .filter-col {
        display:block
    }
}

.section-intro-blog-contet .wrapp-popup-filter .top-line {
    display: none
}

.section-intro-blog-contet .wrapp-popup-filter .top-line .wrapp-autocomplete {
    display: none !important
}

.section-intro-blog-contet .wrapp-popup-filter .wrapp-counts {
    display: none
}

.section-intro-blog-contet .custom-control {
    margin-bottom: 30px
}

.section-intro-blog-contet .custom-control-label::before {
    width: 19px;
    height: 21px;
    top: -3px;
    left: -33px;
    border: #ff6c4d solid 1px
}

.section-intro-blog-contet .custom-control-label::after {
    width: 19px;
    height: 21px;
    top: -3px;
    left: -33px
}

.section-intro-blog-contet .custom-control-label {
    color: #4a4545;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    letter-spacing: -0.72px;
    line-height: 20px;
    margin-left: 12px
}

.section-intro-blog-contet .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #ff6c4d;
    background-color: #ff6c4d
}

.filter-active #header {
    z-index: 0
}

.filter-active .section-intro-blog-contet .filter-col {
    display: block
}

.filter-active .section-intro-blog-contet .wrapp-popup-filter .top-line .wrapp-autocomplete {
    display: flex !important
}

.filter-active .wrapp-popup-filter {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999
}

.filter-active .wrapp-popup-filter .wrapp-filter {
    min-height: 568px;
    height: 100%;
    overflow: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between
}

@media screen and (min-width: 320px) and (max-width:812px) and (orientation:landscape) {
    .filter-active .wrapp-popup-filter .wrapp-filter {
        min-height:300px
    }
}

.filter-active .wrapp-popup-filter .top-line {
    position: relative;
    min-height: 200px;
    display: block
}

.filter-active .wrapp-popup-filter .top-line:after {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url('/assets/images/layer-bg-topp.png');
    display: block;
    position: absolute;
    bottom: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 0
}

.filter-active .wrapp-popup-filter .card-title {
    position: absolute;
    top: 44px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1
}

.filter-active .wrapp-popup-filter .card-title h1 {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

.filter-active .wrapp-popup-filter .card-title h1 p {
    color: #3975fc;
    font-family: 'Lucky Fellas';
    font-size: 46px;
    font-weight: 400;
    display: inline-block;
    margin: 0
}

.filter-active .wrapp-popup-filter .wrapp-autocomplete {
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 99;
    display: flex !important
}

.filter-active .wrapp-popup-filter .tags-form {
    padding: 0 15px 110px
}

.filter-active .wrapp-popup-filter .wrapp-counts {
    position: fixed;
    bottom: 0;
    right: -15px;
    background-color: #404040;
    border-top-left-radius: 26px;
    display: block
}

.filter-active .wrapp-popup-filter .wrapp-counts p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 19px;
    font-weight: 300;
    letter-spacing: -0.76px;
    line-height: 20px;
    margin: 0;
    padding: 20px
}

.filter-active .wrapp-popup-filter .filter-opener {
    position: fixed;
    display: block;
    left: -15px;
    bottom: 0;
    top: inherit;
    border-radius: 0 26px 0 0;
    background-color: #e46a44;
    display: flex;
    align-items: center;
    justify-content: center
}

.wrapp-intro-josepho {
    position: relative;
    background-color: #95d8d6;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 0;
    z-index: 0;
    height: 65vh;
    overflow: hidden
}

.wrapp-intro-josepho.wrapp-intro-jobs1 {
    background-color: #feccd5
}

.wrapp-intro-josepho:before {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url('/assets/images/white-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 1300px) {
    .wrapp-intro-josepho:before {
        height:250px
    }
}

.wrapp-intro-josepho .card-img img {
    width: 100%;
    z-index: -2
}

.section-josepho-content.customize {
    height: auto
}

.section-josepho-content.customize .wrapp-slide-trust {
    background-image: url('/assets/images/pink-fg.png');
    padding: 129px 0 184px;
    height: 320px;
    margin-top: 0
}

@media (min-width: 900px) {
    .section-josepho-content.customize .wrapp-slide-trust {
        padding:172px 0 75px;
        background-size: contain;
        background-position: center;
        margin-top: 0
    }
}

.section-josepho-content.customize .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-content.customize .card-text p {
        font-size:18px;
        font-weight: 300;
        line-height: 29px
    }
}

.section-josepho-content .wrapp-slide-trust {
    max-width: 1080px;
    background-image: url('/assets/images/bgsml-blue-2x.png');
    background-repeat: no-repeat;
    width: 100%;
    padding: 129px 0 184px;
    overflow: hidden;
    background-size: cover;
    height: 270px;
    background-position: center;
    margin-top: -200px;
    z-index: 5
}

@media (min-width: 900px) {
    .section-josepho-content .wrapp-slide-trust {
        padding:130px 0;
        background-size: contain;
        background-position: center;
        margin-top: 0
    }
}

.section-josepho-family .wrapp-josepho-family h1 {
    position: relative;
    font-size: 38px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family h1 {
        font-size:45px
    }
}

.section-josepho-family .wrapp-josepho-family h1:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -15px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family h1:after {
        width:125px;
        height: 20px;
        background-size: 125px;
        bottom: -25px
    }
}

.section-josepho-family .wrapp-josepho-family .card-descrip {
    max-width: 600px;
    margin: 0 auto
}

.section-josepho-family .wrapp-josepho-family .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-descrip p {
        font-size:18px;
        font-weight: 300;
        line-height: 29px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2 {
    color: #90dade;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2::before {
    content: '';
    background-image: url('/assets/images/left-arr.svg');
    width: 45px;
    height: 17px;
    display: block;
    margin-right: 10px;
    background-size: 45px;
    background-repeat: no-repeat
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2::before {
        width:90px;
        height: 34px;
        background-size: 90px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-founder h2::after {
    content: '';
    background-image: url('/assets/images/right-arr.svg');
    width: 45px;
    height: 21px;
    display: block;
    margin-left: 20px;
    background-repeat: no-repeat;
    background-size: 45px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-founder h2::after {
        width:90px;
        height: 42px;
        background-size: 90px;
        position: relative;
        top: -10px
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-team h2 {
    color: #90dade;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px;
    position: relative;
    z-index: 1
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-team h2 {
        font-size:45px;
        line-height: 1.2
    }
}

.section-josepho-family .wrapp-josepho-family .card-title-team h2::after {
    content: '';
    background-image: url('/assets/images/serd.svg');
    width: 36px;
    height: 49px;
    display: block;
    margin-left: 20px;
    background-repeat: no-repeat;
    background-size: 36px;
    position: absolute;
    right: -45px;
    top: -28px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-title-team h2::after {
        width:74px;
        height: 98px;
        background-size: 74px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img {
    width: 90px;
    height: 90px;
    position: relative
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img {
        width:180px;
        height: 180px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img img {
    width: 90px;
    height: 90px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img img {
        width:180px;
        height: 180px
    }
}

.section-josepho-family .wrapp-josepho-family .card-img .social-link {
    position: absolute;
    left: 0px;
    bottom: 0
}

.section-josepho-family .wrapp-josepho-family .card-img .social-link img {
    width: 30px;
    height: auto
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width: auto;
        min-width: 30px
    }
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width:60px
    }
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .section-josepho-family .wrapp-josepho-family .card-img .social-link img {
        width:auto;
        min-width: 60px
    }
}

.section-josepho-family .wrapp-josepho-family .card-name p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-josepho-family .wrapp-josepho-family .card-name p {
        font-size:18px;
        line-height: 29px
    }
}

.wrapp-intro-bordeaux {
    position: relative;
    min-height: 568px;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux {
        height:100vh;
        height: calc(var(--vh, 1vh) * 100)
    }
}

.wrapp-intro-bordeaux:before {
    content: '';
    width: 100%;
    height: 200px;
    background-image: url(/assets/images/white-round.png);
    display: block;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux:before {
        height:27vh
    }
}

.wrapp-intro-bordeaux .card-title {
    position: relative
}

.wrapp-intro-bordeaux .bg-strech {
    min-height: 300px;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -1
}

.wrapp-intro-bordeaux .bg-strech .h1 {
    color: white
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .bg-strech {
        min-height:92vh
    }
}

.wrapp-intro-bordeaux .bg-strech .wrapp-btn {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%);
    width: 100%
}

.wrapp-intro-bordeaux .card-sub-title {
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    bottom: 32px
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title {
        bottom:163px
    }
}

.wrapp-intro-bordeaux .card-sub-title p {
    color: #ff6c4d;
    font-size: 104px;
    font-weight: 400;
    font-family: 'Lucky Fellas';
    z-index: 1;
    display: block
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title p {
        font-size:133px
    }
}

.wrapp-intro-bordeaux .card-sub-title strong {
    color: #ffad9f;
    font-family: 'Centra No1';
    font-size: 57px;
    font-weight: 900;
    line-height: 75px;
    position: relative;
    z-index: -1;
    top: -54px;
    transform: rotate(-5deg)
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title strong {
        font-size:80px
    }
}

.wrapp-intro-bordeaux .card-sub-title strong p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 104px;
    font-weight: 400;
    position: absolute;
    right: -27px;
    top: 0
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .card-sub-title strong p {
        font-size:233px;
        right: -65px
    }
}

.wrapp-intro-bordeaux .next-section {
    position: absolute;
    display: none;
    left: 50%;
    transform: translate(-50%);
    bottom: 100px
}

@media (min-width: 768px) {
    .wrapp-intro-bordeaux .next-section {
        display:block
    }
}

.wrapp-intro-bordeaux .next-section.bounce {
    -moz-animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite
}

@-moz-keyframes bounce {
    0%,20%,50%,80%,100% {
        -moz-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -moz-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -moz-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

@-webkit-keyframes bounce {
    0%,20%,50%,80%,100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

@keyframes bounce {
    0%,20%,50%,80%,100% {
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    40% {
        -moz-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }

    60% {
        -moz-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}

.wrapp-bordeaux-content .card-img {
    position: relative
}

.wrapp-bordeaux-content .card-img img {
    max-width: 517px;
    width: 100%
}

.wrapp-bordeaux-content .card-img .text {
    position: absolute;
    right: 75%;
    top: 50%;
    display: none
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-content .card-img .text {
        display:block
    }
}

.wrapp-bordeaux-content .card-img .text p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 35px;
    font-weight: 400
}

.wrapp-bordeaux-content .card-img .text p:after {
    content: '';
    background-image: url('/assets/images/rimg.png');
    display: block;
    background-repeat: no-repeat;
    width: 98px;
    height: 28px;
    background-size: 98px
}

.wrapp-bordeaux-content .card-text li {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.wrapp-bordeaux-content .card-text li::before {
    display: inline-block;
    content: '';
    -webkit-border-radius: 0.375rem;
    border-radius: 0.375rem;
    height: 0.4rem;
    width: 0.4rem;
    margin-right: 0.5rem;
    background-color: orangered
}

.wrapp-bordeaux-question {
    z-index: 1
}

.wrapp-bordeaux-question .bg-strech {
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    width: 100%;
    z-index: -1;
    margin-top: -285px;
    padding: 380px 0 40px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .bg-strech {
        padding:286px 0 42px;
        margin-top: 0
    }
}

.wrapp-bordeaux-question .bg-strech .wrapp-btn {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%)
}

.wrapp-bordeaux-question .row-question {
    position: relative
}

.wrapp-bordeaux-question .row-question .col-item {
    display: flex;
    align-items: center;
    justify-content: center
}

.wrapp-bordeaux-question .row-question .col-item:first-child {
    align-items: center;
    justify-content: center
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item:first-child {
        align-items:flex-end;
        justify-content: flex-end
    }
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item:last-child {
        align-items:flex-start;
        justify-content: flex-start
    }
}

@media (min-width: 1024px) {
    .wrapp-bordeaux-question .row-question .col-item .card-item {
        padding:0px 100px
    }
}

.wrapp-bordeaux-question .card-img {
    width: 178px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-img {
        width:250px
    }
}

.wrapp-bordeaux-question .card-img img {
    border-radius: 50%;
    width: 178px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-img img {
        width:250px
    }
}

.wrapp-bordeaux-question .card-img .icon-sicial {
    position: absolute;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    background-color: #fff;
    width: 66px;
    height: 66px
}

.wrapp-bordeaux-question .card-img .icon-sicial img {
    width: 100%;
    position: relative;
    top: 3px
}

.wrapp-bordeaux-question .card-descrip p {
    font-size: 14px
}

@media (min-width: 768px) {
    .wrapp-bordeaux-question .card-descrip p {
        font-size:20px
    }
}

.wrapp-bordeaux-question p,.wrapp-bordeaux-question a,.wrapp-bordeaux-question li p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 20px;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s
}

.wrapp-bordeaux-question a:hover {
    color: #ff6c4d
}

.wrapp-bordeaux-question i {
    font-size: 24px;
    width: 24px
}

.section-bordeaux-question {
    z-index: 1;
    position: relative
}

.section-smile-club-bordeaux {
    margin-top: -200px;
    padding-top: 300px;
    padding-bottom: 100px;
    z-index: 0
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux {
        margin-top:-300px;
        padding-bottom: 80px
    }
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title.first-top {
        position:static
    }
}

.section-smile-club-bordeaux .card-title strong {
    display: block;
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title strong {
        font-size:110px
    }
}

.section-smile-club-bordeaux .card-title p {
    color: #ffe9db;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title p {
        font-size:143px;
        top: -60px
    }
}

.section-smile-club-bordeaux .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .section-smile-club-bordeaux .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 285px
    }
}

.section-mention-contet .card-icon {
    position: relative;
    top: -35px
}

.section-mention-contet .card-icon img {
    width: 146px;
    height: 68px
}

@media (min-width: 768px) {
    .section-mention-contet .card-icon img {
        width:282px;
        height: 132px
    }
}

.wrapp-intro-jobs .card-title {
    position: relative;
    margin-top: 120px
}

.wrapp-intro-booking_index {
    position: relative
}

.wrapp-intro-booking_index .jcf-select {
    display: inline-block;
    vertical-align: top;
    position: relative;
    border: none;
    background-color: #f2f2f2;
    margin: 0 0 12px;
    min-width: 150px;
    height: 26px
}

.wrapp-intro-booking_index:before {
    content: '';
    width: 100%;
    height: 250px;
    background-image: url('/assets/images/blue-layer.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index:before {
        height:350px
    }
}

.wrapp-intro-booking_index .card-title {
    padding-top: 90px
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title {
        padding-top:110px
    }
}

.wrapp-intro-booking_index .card-title h1 {
    color: #90dade;
    margin-bottom: 0;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    line-height: 46px;
    transform: rotate(-5deg);
    z-index: 0
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title h1 {
        font-size:50px
    }
}

.wrapp-intro-booking_index .card-title p {
    font-family: 'Lucky Fellas';
    color: #ffe9db;
    font-size: 81px;
    font-weight: 400;
    position: relative;
    top: -40px;
    z-index: 1
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title p {
        font-size:100px
    }
}

.wrapp-intro-booking_index .card-title .card-img {
    margin-top: -50px
}

.wrapp-intro-booking_index .card-title .card-img img {
    width: 71px
}

@media (min-width: 1024px) {
    .wrapp-intro-booking_index .card-title .card-img img {
        width:92px
    }
}

.section-booking_index-content {
    padding: 50px 0
}

.section-booking_index-content .card-title-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.section-booking_index-content .card-descrip-text {
    margin-bottom: 63px
}

.section-booking_index-content .card-descrip-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px
}

.section-booking_index-content .card-wrapp-btns .title {
    margin-bottom: 33px
}

.section-booking_index-content .card-wrapp-btns strong {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 19px;
    font-weight: 700;
    line-height: 20px
}

@media (min-width: 768px) {
    .section-booking_index-content .card-wrapp-btns .btn {
        padding:11px 17px
    }
}

@media (min-width: 1024px) {
    .section-booking_index-content .card-wrapp-btns .btn {
        padding:11px 42px
    }
}

.wrapp-intro-achat-confirmation {
    margin-top: 100px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation {
        margin-top:150px
    }
}

.wrapp-intro-achat-confirmation .card-title strong {
    display: block;
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 900;
    margin: 0;
    transform: rotate(-15deg)
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title strong {
        font-size:110px
    }
}

.wrapp-intro-achat-confirmation .card-title p {
    color: #ff6c4d;
    font-family: 'Lucky Fellas';
    font-size: 71px;
    font-weight: 400;
    position: relative;
    top: -37px;
    margin: 0;
    transform: rotate(-12deg);
    left: 13px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title p {
        font-size:143px;
        top: -60px
    }
}

.wrapp-intro-achat-confirmation .card-title p:after {
    content: '';
    background-image: url('/assets/images/slile-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 130px;
    height: 64px;
    position: relative;
    top: -24px;
    -webkit-transform: rotate(12deg);
    transform: rotate(12deg);
    left: 0px;
    background-size: 120px
}

@media (min-width: 768px) {
    .wrapp-intro-achat-confirmation .card-title p:after {
        width:285px;
        height: 69px;
        position: relative;
        top: -43px;
        transform: rotate(12deg);
        left: 38px;
        background-size: 285px
    }
}

.section-achat-confirmation-content {
    margin-top: -70px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content {
        margin-top:0
    }
}

.section-achat-confirmation-content .wrapp-achat-confirmation-content .card-title {
    margin-bottom: 57px
}

.section-achat-confirmation-content .card-img {
    position: relative;
    margin-bottom: 30px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .card-img {
        margin-bottom:133px
    }
}

.section-achat-confirmation-content .card-img img {
    width: 100%
}

.section-achat-confirmation-content .card-img .smile-icon {
    position: absolute;
    right: 0px;
    top: -80px
}

@media (min-width: 1024px) {
    .section-achat-confirmation-content .card-img .smile-icon {
        top:-80px
    }
}

.section-achat-confirmation-content .card-img .smile-icon svg {
    width: 79px
}

@media (min-width: 1024px) {
    .section-achat-confirmation-content .card-img .smile-icon svg {
        width:auto
    }
}

.section-achat-confirmation-content .card-descrip,.section-achat-confirmation-content form {
    max-width: 620px;
    margin: 7% auto
}

.section-achat-confirmation-content .card-descrip p,.section-achat-confirmation-content form p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 20px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .card-descrip p,.section-achat-confirmation-content form p {
        font-size:18px;
        line-height: 28px
    }
}

.section-achat-confirmation-content .input-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #404040;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    border: none;
    padding: 9px 31px;
    width: 100%;
    max-width: 404px;
    height: auto;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2)
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .input-control {
        padding:17px 31px;
        font-size: 18px;
        line-height: 27px;
        min-width: 497px
    }
}

.section-achat-confirmation-content .input-control::placeholder {
    color: #707070
}

.section-achat-confirmation-content .input-control.input-error {
    box-shadow: 0 0px 4px 2px rgba(255, 0, 0, 0.9)
}

.section-achat-confirmation-content .custom-label {
    color: #404040;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    line-height: 20px;
    margin-left: 10px;
    margin-bottom: 20px
}

@media (min-width: 768px) {
    .section-achat-confirmation-content .custom-label {
        font-size:18px
    }
}

.datepicker-popup {
    position: relative
}

.datepicker-popup .wrapp-datepiker-drop {
    position: absolute;
    top: 100%;
    left: -9999px;
    z-index: 10
}

.datepicker-popup .datepicker-drop {
    display: flex !important;
    flex-direction: column;
    justify-content: space-between
}

.datepicker-popup.datepicker-active .wrapp-datepiker-drop {
    left: 0
}

.steps-section .progress-bar {
    position: fixed;
    top: 0;
    width: 100%;
    left: 0;
    height: 6px;
    background-color: #fff;
    z-index: 100
}

@media (min-width: 768px) {
    .steps-section .progress-bar {
        height:10px
    }
}

.steps-section .progress-bar .progress {
    background-color: #3975fc;
    border-radius: 0
}

.datepicker-opener {
    text-decoration: none
}

.datepicker-opener:hover {
    text-decoration: none
}

.steps-section {
    position: relative
}

.steps-section:after {
    content: '';
    width: 121px;
    height: 69px;
    background-image: linear-gradient(270deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
    display: block;
    position: absolute;
    right: -2px;
    top: 0%
}

@media (min-width: 768px) {
    .steps-section:after {
        content:none
    }
}

.steps-section:before {
    content: '';
    width: 121px;
    height: 69px;
    background-image: linear-gradient(to right, #fff 0%, rgba(255, 255, 255, 0) 100%);
    display: block;
    position: absolute;
    left: -2px;
    top: 0%;
    z-index: 1
}

@media (min-width: 768px) {
    .steps-section:before {
        content:none
    }
}

@media (min-width: 768px) {
    .steps-section form {
        padding-top:64px
    }
}

.wrapp-steps {
    margin: 105px 0px 30px;
    transform: translateX(50%);
    position: relative !important
}

@media (min-width: 768px) {
    .wrapp-steps {
        border-radius:50px;
        max-width: 54vw;
        margin: 27px 0;
        background: white;
        padding: 10px 0;
        position: fixed !important;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 100;
        -webkit-box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24);
        -moz-box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24);
        box-shadow: 1px -1px 18px -5px rgba(0, 0, 0, 0.24)
    }
}

.wrapp-steps .steps-progress {
    position: relative
}

@media (min-width: 768px) {
    .wrapp-steps .steps-progress {
        margin:0 10px
    }
}

.wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
    content: '';
    width: 100%;
    height: 1px;
    background-color: #ed6c59;
    display: block;
    position: absolute;
    z-index: 0
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
        width: 72%
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before,.wrapp-steps .steps-progress:after {
        width:80%
    }
}

.wrapp-steps .steps-progress:before {
    left: 0;
    top: 23px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before {
        left: 235px
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:before {
        left:83px
    }
}

.wrapp-steps .steps-progress:after {
    left: 0;
    top: 31px;
    z-index: -1
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:after {
        left: 235px
    }
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .wrapp-steps .steps-progress:after {
        left:83px
    }
}

.wrapp-steps .steps-progress li {
    width: 57px;
    height: 57px;
    border-radius: 50%;
    border: 1px solid #ed6c59;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 0;
    position: relative
}

.wrapp-steps .steps-progress li.active {
    cursor: pointer
}

.wrapp-steps .steps-progress li.active span {
    background-color: #ed6c59;
    color: #fff;
    border: 2px solid #ed6c59
}

.wrapp-steps .steps-progress li.current {
    cursor: inherit
}

.wrapp-steps .steps-progress li:first-child:before {
    content: none
}

.wrapp-steps .steps-progress li:last-child:after {
    content: none
}

.wrapp-steps .steps-progress li:before,.wrapp-steps .steps-progress li:after {
    content: '';
    width: 7px;
    height: 8px;
    background-color: #fff;
    display: block;
    position: absolute;
    top: 49%;
    transform: translateY(-50%)
}

.wrapp-steps .steps-progress li:before {
    left: -1px
}

.wrapp-steps .steps-progress li:after {
    right: -1px
}

.wrapp-steps .steps-progress li p {
    width: 54.5px;
    height: 54.5px;
    display: flex;
    align-items: center;
    flex-shrink: 0;
    justify-content: center;
    background-color: #fff;
    margin: 0;
    padding: 5px;
    z-index: 5;
    border-radius: 50%
}

.wrapp-steps .steps-progress li span {
    color: #ed6c59;
    font-size: 23px;
    font-weight: 700;
    border: 1px solid #ed6c59;
    z-index: 5;
    width: 46px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center
}

.steps-progress {
    display: flex;
    align-items: center;
    justify-content: space-between
}

.wrapp-steps {
    position: relative
}

.steps-section .step {
    display: none;
    height: 100%;
    position: relative;
    margin-bottom: 270px;
    padding: 50px 0 0
}

@media (min-width: 768px) {
    .steps-section .step {
        padding:100px 0 0
    }
}

.steps-section .step.active {
    display: flex
}

.steps-section .step.step-inner {
    padding: 50px 0 0;
    margin-bottom: 100px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner {
        padding:50px 0 0
    }
}

.steps-section .step.step-inner .step-bottom {
    z-index: 1;
    position: fixed;
    left: 0;
    width: 100%;
    padding: 3px 0px 9px;
    height: 88px;
    bottom: 58px;
    background-color: #fff
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom {
        bottom:72px;
        height: 94px;
        background-color: #fff;
        box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
    }
}

@media (min-width: 1360px) {
    .steps-section .step.step-inner .step-bottom {
        bottom:0
    }
}

.steps-section .step.step-inner .step-bottom.custom {
    padding: 19px 0 21px;
    height: auto
}

.steps-section .step.step-inner .step-bottom.custom .next-step {
    position: static
}

.steps-section .step.step-inner .step-bottom .next-step {
    position: relative;
    top: -12px
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons .btn {
    padding: 6px 9px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom .wrapp-buttons .btn {
        padding:11px 42px
    }
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons .next-step {
    position: relative;
    top: 0px
}

.steps-section .step.step-inner .step-bottom .wrapp-buttons span {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -1.12px;
    line-height: 30px
}

@media (min-width: 768px) {
    .steps-section .step.step-inner .step-bottom .wrapp-buttons span {
        color:#707070;
        font-size: 28px
    }
}

.steps-section .step .hidden-field {
    opacity: 0;
    position: fixed;
    left: 0;
    top: 0;
    z-index: -9999
}

.steps-section .step.min-info {
    height: 100%;
    padding: 50px 0 0;
    margin-bottom: 120px
}

@media (min-width: 768px) {
    .steps-section .step.min-info {
        padding:10vh 0 0
    }
}

.steps-section .step .wrapp-item-control {
    margin-bottom: 30px;
    padding: 0 15px
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control {
        margin-bottom:50px
    }
}

.steps-section .step .wrapp-item-control label {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control label {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .wrapp-item-control .custom-label {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    line-height: 20px;
    margin-left: 10px
}

@media (min-width: 768px) {
    .steps-section .step .wrapp-item-control .custom-label {
        font-size:18px
    }
}

.steps-section .step .title {
    margin-bottom: 33px;
    padding: 0 15px;
    position: relative
}

.steps-section .step .title p {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .title p {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .title:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .step .title-step {
    margin-bottom: 50px;
    position: relative
}

.steps-section .step .title-step p {
    font-size: 19px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .step .title-step p {
        font-size:20px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .step .title-step:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .step-inner .wrapp-item-control {
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .step-inner .wrapp-item-control {
        width:auto
    }
}

.steps-section .step-inner .wrapp-item-control .input-control {
    max-width: 100%
}

@media (min-width: 768px) {
}

.steps-section .back-link {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 45px;
    text-decoration: none
}

@media (min-width: 768px) {
    .steps-section .back-link {
        font-size:20px;
        font-weight: 300;
        line-height: 45px
    }
}

.steps-section .wrapp-static-info {
    border-radius: 12px;
    background-color: transparent;
    padding: 15px;
    margin-bottom: 35px
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info {
        background-color:#f4f4f4;
        padding: 47px 53px
    }
}

.steps-section .wrapp-static-info p {
    color: #707070;
    word-break: break-all;
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info p {
        font-size:18px;
        font-weight: 300;
        line-height: 28px
    }
}

.steps-section .wrapp-static-info p span {
    font-family: 'Centra No1'
}

.steps-section .wrapp-static-info li {
    margin-bottom: 44px
}

.steps-section .wrapp-static-info li:last-child {
    margin-bottom: 0
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info li {
        margin-bottom:25px
    }
}

.steps-section .wrapp-static-info a {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    text-decoration: underline;
    transition: 0.3s
}

@media (min-width: 768px) {
    .steps-section .wrapp-static-info a {
        font-size:18px;
        line-height: 28px
    }
}

.steps-section .wrapp-static-info a:hover {
    text-decoration: none
}

.steps-section .wrapp-jobox-info {
    border-radius: 12px;
    background-color: #404040;
    padding: 37px 32px;
    margin-bottom: 44px;
    position: relative
}

.steps-section .wrapp-jobox-info .title:after {
    content: none
}

.steps-section .wrapp-jobox-info h2 {
    font-size: 28px
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info h2 {
        font-size:45px
    }
}

.steps-section .wrapp-jobox-info:before {
    content: '';
    background-image: url('/assets/images/chesse1-2x.png');
    width: 88px;
    height: 88px;
    background-size: 88px;
    position: absolute;
    top: -25px;
    right: -15px
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info:before {
        width:105px;
        height: 105px;
        background-size: 105px;
        top: -52px;
        right: -52px
    }
}

.steps-section .wrapp-jobox-info .modif {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    text-decoration: underline;
    transition: 0.3s
}

.steps-section .wrapp-jobox-info .modif:hover {
    text-decoration: none
}

.steps-section .wrapp-jobox-info ul li {
    border-bottom: 1px solid #fff;
    margin: 0 0 20px
}

.steps-section .wrapp-jobox-info ul a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    text-decoration: none;
    transition: 0.3s
}

@media (min-width: 1024px) {
    .steps-section .wrapp-jobox-info ul a {
        font-size:20px;
        font-weight: 700;
        line-height: 27px
    }
}

.steps-section .wrapp-jobox-info ul a:hover {
    color: #ff6c4d
}

.steps-section .wrapp-jobox-info ul a:hover span::before,.steps-section .wrapp-jobox-info ul a:hover span::after {
    background-color: #ff6c4d
}

.steps-section .wrapp-jobox-info span {
    position: relative;
    margin-top: -7px
}

.steps-section .wrapp-jobox-info span::before,.steps-section .wrapp-jobox-info span::after {
    position: absolute
}

.steps-section .wrapp-jobox-info span::before {
    content: '';
    width: 3px;
    height: 20px;
    display: block;
    background-color: #fff;
    border-radius: 1.5px;
    top: -9px;
    right: 20px;
    transform: rotate(45deg)
}

.steps-section .wrapp-jobox-info span::after {
    content: '';
    width: 3px;
    height: 20px;
    display: block;
    background-color: #fff;
    border-radius: 1.5px;
    top: -9px;
    right: 20px;
    transform: rotate(-45deg)
}

.steps-section .wrapp-jobox-info .wrapp-btn .btn {
    padding: 6px 18px
}

.steps-section .wrapp-jobox-info .wrapp-btn .btn:hover {
    color: #ff6c4d
}

@media (min-width: 768px) {
    .steps-section .wrapp-jobox-info .wrapp-btn .btn {
        padding:11px 11px
    }
}

@media (min-width: 1024px) {
    .steps-section .wrapp-jobox-info .wrapp-btn .btn {
        padding:11px 42px
    }
}

.steps-section .card-trust img {
    width: 100%
}

.steps-section .form-group {
    padding: 0 15px
}

.steps-section .input-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #808080;
    font-size: 16px;
    font-weight: 300;
    line-height: 42px;
    border: none;
    padding: 10px 20px 10px 57px;
    width: 100%;
    height: auto;
    font-size: 18px;
    line-height: 42px
}

@media (min-width: 768px) {
    .steps-section .input-control {
        padding:10px 20px 10px 57px;
        font-size: 18px;
        line-height: 42px
    }
}

.steps-section .input-control::placeholder {
    color: #707070
}

.steps-section .input-control.input-error {
    box-shadow: 0 0px 4px 2px rgba(255, 0, 0, 0.9)
}

.steps-section .step-bottom {
    position: fixed;
    z-index: 1;
    left: 0;
    bottom: 0px;
    width: 100%;
    padding: 3px 0px 9px;
    height: 94px
}

@media (min-width: 768px) {
    .steps-section .step-bottom {
        background-color:#fff;
        box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.16)
    }
}

@media (min-width: 1360px) {
    .steps-section .step-bottom {
        bottom:0
    }
}

.steps-section .step-bottom.custom {
    padding: 19px 0 21px;
    height: auto
}

.steps-section .step-bottom.custom .next-step {
    position: static
}

.steps-section .step-bottom .next-step {
    position: relative;
    top: -12px
}

.steps-section .form-row {
    width: 100%;
    max-width: 600px
}

@media (min-width: 768px) {
    .steps-section .custom-control {
        display:contents
    }
}

.steps-section .custom-control .custom-control-label {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
    margin-left: 20px
}

.steps-section .custom-control .custom-control-label::before {
    border: 2px solid #ff6c4d;
    width: 28px;
    height: 28px;
    left: -2.5rem;
    top: -5px
}

.steps-section .custom-control .custom-control-label::after {
    top: 1px;
    left: -34px
}

.steps-section .custom-control .custom-control-input:checked~.custom-control-label::before {
    background-color: #ff6c4d
}

.steps-section .custom-control .custom-control-input:checked~.custom-control-label::after {
    background-image: url('/assets/images/checkin.svg') !important;
    background-size: 16px
}

.steps-section .card-text-descrip {
    max-width: 650px;
    margin: 0 auto 60px;
    padding: 0 15px
}

.steps-section .card-text-descrip p {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 14px;
    line-height: 25px;
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .card-text-descrip p {
        font-size:20px
    }
}

.steps-section .card-title {
    padding: 0 15px
}

.steps-section .card-title p {
    font-size: 19px;
    line-height: 20px;
    margin-bottom: 35px;
    font-family: 'Centra No1'
}

@media (min-width: 768px) {
    .steps-section .card-title p {
        font-size:20px
    }
}

.steps-section .form-group.next-step {
    width: 100%;
    max-width: 404px;
    margin: 0 auto 40px
}

.steps-section .jcf-number {
    position: relative;
    margin-bottom: 50px
}

.steps-section .jcf-number .jcf-real-element {
    width: 80px;
    height: 44px;
    border-radius: 43px;
    border: 2px solid #d5d5d5;
    text-align: center;
    -moz-appearance: textfield !important;
    text-align: center;
    padding: 0
}

.steps-section .jcf-number .jcf-btn-inc,.steps-section .jcf-number .jcf-btn-dec {
    position: absolute;
    top: 68%;
    transform: translateY(-50%);
    width: 34px;
    height: 35px;
    color: #808080;
    border-radius: 50%;
    border: 2px solid #707070;
    background-color: #fff;
    font-family: 'Centra No1';
    font-size: 27px;
    font-weight: 300;
    line-height: 1px;
    display: flex;
    align-items: center;
    justify-content: center
}

.steps-section .jcf-number .jcf-btn-inc {
    right: -45px
}

.steps-section .jcf-number .jcf-btn-dec {
    left: -45px
}

.steps-section .jcf-number .jcf-btn-dec:before {
    content: '';
    background-image: url('/assets/images/minus.svg');
    border: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
    width: 12px;
    height: 15px;
    display: block;
    background-size: cover;
    background-repeat: no-repeat
}

.steps-section .jcf-number .jcf-btn-inc:before {
    content: '';
    background-image: url('/assets/images/plus.svg');
    border: none;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
    width: 12px;
    height: 15px;
    display: block;
    background-size: cover;
    background-repeat: no-repeat
}

.steps-section .jcf-focus,.steps-section .jcf-focus * {
    border-color: #d5d5d5 !important
}

.steps-section .datepicker-popup {
    margin-bottom: 70px
}

@media (min-width: 768px) {
    .steps-section .datepicker-popup {
        margin-bottom:114px
    }
}

.steps-section .datepicker-popup .input-control {
    margin: 0 auto
}

@media (min-width: 768px) {
}

.steps-section .datepicker-popup.datepicker-active .wrapp-datepiker-drop {
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    position: fixed;
    z-index: 9999;
    display: block;
    border-radius: 0
}

@media (min-width: 768px) {
    .steps-section .datepicker-popup.datepicker-active .wrapp-datepiker-drop {
        left:50%;
        transform: translateX(-50%);
        top: 89%;
        position: absolute;
        border-radius: 7px
    }
}

.steps-section .data-title {
    text-decoration: none;
    font-size: 19px;
    line-height: 20px;
    font-family: 'Centra No1';
    font-weight: bold;
    margin-bottom: 40px;
    position: relative;
    padding: 0 15px
}

@media (min-width: 768px) {
    .steps-section .data-title {
        font-size:20px
    }
}

.steps-section .data-title:hover {
    color: #808080;
    opacity: 0.6
}

.steps-section .data-title:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 129px;
    height: 13px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -15px
}

.steps-section .wrapp-datepiker-drop {
    height: 100%;
    position: relative;
    width: 100%;
    display: none
}

@media (min-width: 768px) {
    .steps-section .wrapp-datepiker-drop {
        width:auto
    }
}

.steps-section .datepicker-drop {
    box-shadow: 0 2px 6px rgba(149, 149, 149, 0.36);
    background-color: #fff;
    border-radius: 0;
    width: 100%;
    padding: 10px;
    height: 100%
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop {
        padding:18px 18px 0;
        border-radius: 7px;
        min-width: 355px;
        top: 15px;
        position: relative;
        margin-bottom: 10px;
        height: auto
    }
}

.steps-section .datepicker-drop::before {
    content: '';
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 15px solid #fff;
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translate(-50%)
}

.steps-section .datepicker-drop:after {
    content: '';
    background-image: url('/assets/images/bg-orange-round.svg');
    top: 0;
    left: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    position: absolute;
    background-size: cover;
    width: 100%;
    height: 150px
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop:after {
        content:none
    }
}

.steps-section .datepicker-drop .data-time-text {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 5;
    margin-top: 25px;
    font-size: 25px;
    font-weight: 300;
    font-family: 'Centra No1';
    font-weight: bold;
    color: #fff;
    font-weight: 700;
    text-align: center
}

.steps-section .datepicker-drop .data-time-text:after {
    content: none
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .data-time-text {
        display:none
    }
}

.steps-section .datepicker-drop .hasDatepicker {
    margin-bottom: 25px
}

@media (max-width: 767px) {
    .steps-section .datepicker-drop .hasDatepicker {
        box-shadow:0 5px 10px #bad0f1;
        border-radius: 20px;
        background-color: #fff;
        z-index: 8;
        position: relative;
        top: -12px;
        padding: 0 5px 0;
        height: 233px;
        margin-bottom: 50px
    }
}

@media (max-width: 767px) {
    .steps-section .datepicker-drop .hasDatepicker .ui-datepicker {
        box-shadow:0 5px 10px #bad0f1;
        border-radius: 20px;
        background-color: #fff;
        position: relative;
        top: -12px;
        padding-bottom: 7px
    }
}

.steps-section .datepicker-drop .ui-datepicker-header {
    display: flex;
    justify-content: space-between;
    padding: 15px 5px 25px;
    position: relative
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-header {
        padding:0 0 30px
    }
}

.steps-section .datepicker-drop .ui-datepicker-title {
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-title {
        top:0px
    }
}

.steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
    opacity: 0.32;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ff6c4d
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
        font-size: 14px
    }
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-prev span,.steps-section .datepicker-drop .ui-datepicker-next span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop thead th {
    padding: 15px 0 20px
}

@media (min-width: 768px) {
}

@media screen and (min-width: 768px) and (-ms-high-contrast:active),(min-width: 768px) and (-ms-high-contrast:none) {
    .steps-section .datepicker-drop .ui-datepicker-next {
        position:absolute;
        right: -10px
    }
}

.steps-section .datepicker-drop .ui-datepicker-prev-hover span,.steps-section .datepicker-drop .ui-datepicker-next-hover span {
    color: #ff6c4d;
    opacity: 1
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-prev-hover span,.steps-section .datepicker-drop .ui-datepicker-next-hover span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop .ui-datepicker-title {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}

.steps-section .datepicker-drop .ui-datepicker-title span {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 25px;
    font-weight: 700;
    text-transform: uppercase
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-datepicker-title span {
        color:#ff6c4d
    }
}

.steps-section .datepicker-drop .ui-datepicker-title span:last-child {
    margin-top: -20px
}

.steps-section .datepicker-drop .ui-datepicker-calendar {
    width: 100%
}

.steps-section .datepicker-drop .ui-state-default {
    color: #b2b2b2;
    font-family: 'Centra No1';
    font-size: 17px;
    font-weight: 300;
    display: block;
    padding: 11px;
    text-decoration: none;
    z-index: 22
}

.steps-section .datepicker-drop .ui-state-active {
    position: relative;
    color: #fff
}

.steps-section .datepicker-drop .ui-state-active:after {
    content: '';
    border-radius: 50%;
    color: #fff;
    flex-shrink: 0;
    width: 35px;
    height: 35px;
    display: block;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 0;
    z-index: -1;
    background-color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .ui-state-active:after {
        background-color:#808080
    }
}

.steps-section .datepicker-drop td,.steps-section .datepicker-drop th {
    text-align: center
}

.steps-section .datepicker-drop th span {
    color: #000
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop th span {
        color:#000
    }
}

.steps-section .datepicker-drop .jcf-range-display-wrapper {
    height: 8px;
    display: flex
}

.steps-section .datepicker-drop .jcf-range-display-wrapper .jcf-range-display {
    background-color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .jcf-range-display-wrapper .jcf-range-display {
        background-color:#808080
    }
}

.steps-section .datepicker-drop .text-value {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300
}

.steps-section .datepicker-drop .range-value {
    position: absolute;
    right: 15px;
    color: #808080
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .range-value {
        color:#808080
    }
}

.steps-section .datepicker-drop .range-value span {
    color: #808080;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .range-value span {
        color:#808080
    }
}

.steps-section .datepicker-drop .jcf-range {
    margin: 0px;
    width: 100%;
    padding-right: 45px
}

.steps-section .datepicker-drop .jcf-range .jcf-range-wrapper {
    height: 8px
}

.steps-section .datepicker-drop .jcf-range .jcf-range-handle {
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.16);
    border: 3px solid #fff;
    background-color: #808080;
    top: -11px;
    width: 21px;
    height: 21px;
    margin: -3px 2px 0
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .jcf-range .jcf-range-handle {
        background-color:#808080
    }
}

.steps-section .datepicker-drop .jcf-range .jcf-focus .jcf-range-handle {
    border-color: #ff6c4d !important
}

.steps-section .datepicker-drop .jcf-focus,.steps-section .datepicker-drop .jcf-focus * {
    border-color: #ff6c4d !important
}

.steps-section .datepicker-drop .btn-apply {
    border: none;
    background-color: #ff6c4d;
    margin: 30px auto 0;
    color: #fff;
    font-family: 'Centra No1';
    border-radius: 43px;
    font-size: 14px;
    font-weight: 300;
    line-height: 24px;
    text-transform: uppercase;
    width: 100%;
    padding: 8px;
    border: 1px solid transparent
}

.steps-section .datepicker-drop .btn-apply:hover {
    background-color: transparent;
    color: #ff6c4d;
    border: 1px solid #ff6c4d
}

@media (min-width: 768px) {
    .steps-section .datepicker-drop .btn-apply {
        width:auto;
        font-size: 22px;
        background-color: transparent;
        color: #ff6c4d;
        border-radius: 0
    }
}

.steps-section .options-group .col-item {
    width: 100%
}

.steps-section .options-group .col-item:first-child {
    width: 20%
}

.steps-section .options-group .wrapp-option-item {
    border: 2px solid #d8d8d8;
    padding: 16px;
    border-radius: 10px;
    min-height: 355px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group.custom .option-item:nth-child(2n) .card-img img {
        zoom:0.6}
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group.custom .option-item .card-img img {
        zoom:1}
}

.steps-section .options-group .card-img {
    width: 52px
}

@media (min-width: 768px) {
    .steps-section .options-group .card-img {
        margin-top:45px
    }
}

.steps-section .options-group .card-img img {
    width: 52px;
    -webkit-filter: grayscale(1);
    filter: grayscale(1)
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .options-group .card-img img {
        zoom:0.6;width: auto;
        height: auto
    }
}

.steps-section .options-group .title-option {
    margin-bottom: 15px
}

.steps-section .options-group .title-option strong {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 18px;
    margin-right: 15px
}

@media (min-width: 768px) {
    .steps-section .options-group .title-option strong {
        font-size:21px;
        font-weight: 700;
        line-height: 20px
    }
}

.steps-section .options-group .card-descrip {
    width: 100%
}

.steps-section .options-group .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 16px;
    width: 100%
}

@media (min-width: 768px) {
    .steps-section .options-group .card-descrip p {
        font-size:17px;
        font-weight: 300;
        line-height: 20px
    }
}

.steps-section .options-group .title-count p {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 20px
}

.steps-section .options-group .jcf-number {
    margin-bottom: 0
}

.steps-section .options-group .jcf-number .jcf-real-element::-webkit-outer-spin-button,.steps-section .options-group .jcf-number .jcf-real-element::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: textfield !important;
    margin: 0;
}

.steps-section .options-group .jcf-number input[type='number'] {
    -moz-appearance: textfield !important
}

.steps-section .options-group .wrapp-cheked {
    border-radius: 19px;
    background-color: #b2b2b2;
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase;
    padding: 12px 18px 6px;
    min-width: 90px;
    cursor: pointer
}

.steps-section .options-group .wrapp-cheked small {
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase
}

.steps-section .options-group .wrapp-cheked input {
    position: absolute;
    left: -99999px
}

.steps-section .jcf-select {
    width: 100%;
    height: auto;
    border-radius: 50px;
    border: none;
    padding: 17px 31px;
    font-size: 18px;
    line-height: 27px
}

.steps-section .jcf-select .jcf-select-text {
    color: black;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 21px
}

.steps-section .jcf-select .jcf-select-opener {
    background-image: url(/assets/images/icon-next-gray.svg);
    position: absolute;
    text-align: center;
    width: 50px;
    bottom: 0;
    right: 0;
    top: 8px;
    height: 18px;
    transform: rotate(90deg);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    line-height: 30px;
    margin-top: 9px
}

.steps-section .wrapp-selected {
    border-radius: 10px
}

.steps-section .option-selected .wrapp-selected {
    border: 2px solid #ff6c4d;
    padding-bottom: 16px
}

.steps-section .option-selected .wrapp-cheked {
    background-color: #ff6c4d
}

.steps-section .option-selected .wrapp-option-item {
    border: 1px solid transparent;
    padding-bottom: 0
}

.steps-section .option-selected .count-wrapper {
    display: flex
}

.steps-section .option-selected .count-wrapper select {
    width: 100%;
    margin: 0 auto
}

.steps-section .option-selected .card-img img {
    -webkit-filter: grayscale(0);
    filter: grayscale(0)
}

.steps-section .option-selected .title-option strong {
    color: #ff6c4d
}

.steps-section .count-wrapper {
    display: none
}

.steps-section .wrapp-btns {
    margin-top: -60px;
    position: relative;
    border-bottom: 1px solid #ff6c4d;
    display: flex;
    cursor: pointer
}

@media (min-width: 768px) {
    .steps-section .wrapp-btns {
        display:none
    }
}

.steps-section .wrapp-btns:before {
    content: '';
    background-image: linear-gradient(to top, #fff 0%, rgba(255, 255, 255, 0) 100%);
    width: 100%;
    height: 50px;
    display: block
}

.steps-section .wrapp-btns p {
    margin-top: 20px;
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px
}

.steps-section .wrapp-btns p img {
    width: 9px;
    margin-left: 15px;
    transform: rotate(90deg)
}

.steps-section .price {
    font-family: 'Centra No1';
    font-weight: bold;
    font-weight: 700;
    line-height: 22px;
    font-size: 18px;
    position: fixed;
    top: 20px;
    transform: translateX(-50%);
    width: 60vw;
    left: 60%
}

.steps-section .price span {
    font-size: 23px
}

@media (min-width: 768px) {
    .steps-section .price {
        left:50%;
        width: auto;
        position: static;
        font-size: 34px;
        font-weight: 700;
        letter-spacing: -1.52px;
        line-height: 30px;
        transform: translateX(0)
    }

    .steps-section .price span {
        font-size: 30px
    }
}

.steps-section .wrapp-item {
    margin-bottom: 50px
}

.steps-section .wrapp-item.popup-active .card-item {
    display: flex
}

.steps-section .wrapp-item.popup-active .card-item:nth-child(-n+6) {
    display: flex
}

.steps-section .wrapp-item .card-item {
    display: flex
}

@media (max-width: 767px) {
    .steps-section .wrapp-item .card-item {
        display:none
    }
}

@media (max-width: 767px) {
    .steps-section .wrapp-item .card-item:nth-child(-n+4) {
        display:flex
    }
}

.steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
    width: 50%
}

@media (min-width: 576px) {
    .steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
        width:auto
    }
}

@media screen and (min-width: 576px) and (-ms-high-contrast:active),(min-width: 576px) and (-ms-high-contrast:none) {
    .steps-section .wrapp-item .card-item .card-img,.steps-section .wrapp-item .card-item .card-text {
        width:120px
    }
}

.steps-section .wrapp-item .card-img img {
    width: 63px;
    height: 67px
}

@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .steps-section .wrapp-item .card-img img {
        zoom:0.6;width: auto;
        height: auto;
        margin-left: 28px
    }
}

.steps-section .wrapp-item .card-text p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 16px
}

@media (min-width: 768px) {
    .steps-section .wrapp-item .card-text p {
        font-size:18px;
        color: #808080
    }
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #fff;
    background-color: #ffad9f;
    border-color: #ffad9f
}

.wrapp-contact-popup {
    position: fixed;
    right: 0;
    bottom: 0;
    transform: translateY(0);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    background-color: #ff6c4d;
    flex-direction: row;
    width: 100%;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 11px
}

@media (min-width: 800px) {
    .wrapp-contact-popup {
        flex-direction:column;
        right: 0;
        top: 50%;
        bottom: inherit;
        height: auto;
        width: auto;
        background-color: #fff;
        padding: 0 31px 15px;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        transform: translateY(-50%)
    }
}

.wrapp-contact-popup .card-img {
    width: 80px;
    height: 80px;
    padding: 2px;
    border-radius: 50%;
    background-color: #fff;
    margin-top: -32px;
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.16)
}

@media (max-width: 800px) {
    .wrapp-contact-popup .card-img {
        width:50px;
        height: 50px;
        margin-top: 0px
    }
}

.wrapp-contact-popup .card-img img {
    width: 100%
}

.wrapp-contact-popup .card-title {
    margin-left: 10px;
    align-items: flex-start;
    justify-content: flex-start;
    margin-bottom: 0
}

@media (min-width: 800px) {
    .wrapp-contact-popup .card-title {
        margin-right:0;
        align-items: center;
        justify-content: center
    }
}

.wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
    color: #fff;
    font-family: 'Centra No1';
    margin: 0;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px
}

@media (min-width: 768px) {
    .wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
        font-size:14px;
        line-height: 17px
    }
}

.wrapp-contact-popup strong:hover,.wrapp-contact-popup a:hover,.wrapp-contact-popup p:hover {
    text-decoration: none
}

@media (min-width: 800px) {
    .wrapp-contact-popup strong,.wrapp-contact-popup a,.wrapp-contact-popup p {
        color:#808080
    }
}

.wrapp-contact-popup strong {
    font-family: 'Centra No1';
    font-weight: bold
}

.wrapp-contact-popup strong a {
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 1360px) {
}

@media (min-width: 800px) {
    .wrapp-contact-popup .card-title {
        margin-bottom:15px
    }
}

.wrapp-contact-popup .list-contact-popup {
    display: none
}

@media (min-width: 800px) {
    .wrapp-contact-popup .list-contact-popup {
        display:block
    }
}

.wrapp-contact-popup strong a {
    display: inline-block
}

.wrapp-contact-popup strong a:hover {
    text-decoration: underline
}

@media (min-width: 800px) {
    .wrapp-contact-popup strong a {
        display:none
    }
}

.promotion-wrapper {
    position: relative
}

@media (max-width: 767px) {
    .promotion-wrapper {
        position:fixed;
        width: 100vw;
        padding: 10px;
        padding-bottom: 0;
        background: white;
        bottom: 80px
    }
}

.step-modal {
    border: 1px solid #707070;
    background-color: rgba(7, 7, 7, 0.87);
    bottom: 0;
    right: 0
}

#success-modal .modal-content {
    box-shadow: 0 5px 29px rgba(0, 0, 0, 0.4);
    border-radius: 17px;
    background-color: #ff6c4d;
    padding: 49px 0px;
    height: 100%
}

@media (min-width: 768px) {
    #success-modal .modal-content {
        padding:70px 0px
    }
}

#success-modal .modal-header,#success-modal .modal-body,#success-modal .modal-footer {
    border: none;
    padding: 0 30px
}

@media (min-width: 768px) {
    #success-modal .modal-header,#success-modal .modal-body,#success-modal .modal-footer {
        padding:0 65px
    }
}

#success-modal .modal-header {
    margin-bottom: 12px
}

#success-modal .modal-body {
    margin-bottom: 40px
}

#success-modal strong {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    margin-bottom: 34px
}

#success-modal p {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px
}

@media (min-width: 768px) {
    #success-modal p {
        font-size:18px
    }
}

#error-modal .modal-content {
    box-shadow: 0 5px 29px rgba(0, 0, 0, 0.4);
    border-radius: 17px;
    background-color: #3975fc;
    padding: 70px 0px;
    height: 100%
}

#error-modal .modal-header,#error-modal .modal-body,#error-modal .modal-footer,#error-modal .card-img {
    border: none;
    padding: 0 65px
}

#error-modal .modal-body {
    margin-bottom: 40px
}

#error-modal .card-img {
    margin-bottom: 12px
}

#error-modal strong,#error-modal h5 {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 38px;
    font-weight: 900;
    line-height: 39px;
    margin-bottom: 34px
}

#error-modal p {
    color: #fff;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 21px
}

#error-modal.hide-modal-body [data-error] {
    display: block
}

#error-modal.hide-modal-body [data-error-default] {
    display: none
}

#error-modal.hide-modal-body .modal-body {
    display: none
}

#error-modal [data-error] {
    display: none
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width:806px;
        margin: 10.75rem auto
    }
}

.wrapp-booking-pay {
    margin-bottom: 100px
}

.wrapp-booking-pay .booking-pay-tabset {
    margin-bottom: 50px
}

.wrapp-booking-pay .booking-pay-tabset .col-item {
    width: 100%
}

.wrapp-booking-pay .booking-pay-tabset .col-item:first-child {
    width: 20%
}

.wrapp-booking-pay .booking-pay-tabset input {
    visibility: hidden
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item {
    border: 1px solid #ff6c4d
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item .card-img img {
    -webkit-filter: grayscale(0);
    filter: grayscale(0)
}

.wrapp-booking-pay .booking-pay-tabset input:checked~.wrapp-option-item .title-option strong {
    color: #ff6c4d
}

.wrapp-booking-pay .booking-pay-tabset .wrapp-option-item {
    border: 1px solid #d8d8d8;
    padding: 8px;
    text-decoration: none;
    height: 89px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .wrapp-option-item {
        padding:16px;
        height: 137px;
        margin: 30px 0;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px
    }
}

.wrapp-booking-pay .booking-pay-tabset .card-img {
    width: 68px
}

.wrapp-booking-pay .booking-pay-tabset .card-img img {
    width: 55px;
    -webkit-filter: grayscale(1);
    filter: grayscale(1)
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .card-img img {
        width:68px
    }
}

.wrapp-booking-pay .booking-pay-tabset .title-option {
    margin-bottom: 15px
}

.wrapp-booking-pay .booking-pay-tabset .title-option strong {
    color: #808080;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 15px;
    font-weight: 700;
    line-height: 18px;
    margin-right: 15px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .title-option strong {
        font-size:21px;
        font-weight: 700;
        line-height: 20px
    }
}

.wrapp-booking-pay .booking-pay-tabset .card-descrip {
    width: 100%
}

.wrapp-booking-pay .booking-pay-tabset .card-descrip p {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 16px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-booking-pay .booking-pay-tabset .card-descrip p {
        font-size:17px;
        font-weight: 300;
        line-height: 20px
    }
}

.wrapp-booking-pay .tab-content .tab-item-content {
    display: none;
    width: 100%;
    margin-top: 60px
}

@media (min-width: 768px) {
    .wrapp-booking-pay .tab-content .tab-item-content {
        width:50%
    }
}

.wrapp-booking-pay .tab-content .tab-item-content.radio-tab-active {
    display: block
}

.wrapp-booking-pay .tab-content .lock-title .card-icon {
    margin-bottom: 15px
}

.wrapp-booking-pay .tab-content .lock-title p {
    color: #3975fc;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 15px
}

@media (max-width: 768px) {
    .modal-dialog {
        height:100%;
        margin: 0
    }
}

label {
    font-weight: bold
}

.form-control {
    border-radius: 43px;
    background-color: #f2f2f2;
    color: #808080;
    font-family: 'Centra No1';
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    border: none;
    padding: 18px 45px;
    width: 200%;
    height: auto
}

span.step-devis {
    background: #ff6c4d;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 0.8em;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    line-height: 1.6em;
    margin-right: 15px;
    text-align: center;
    width: 1.6em
}

.wrapp-intro-case-study {
    position: relative;
    min-height: 600px;
    height: 100vh;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    z-index: 0
}

@media (min-width: 768px) {
}

.wrapp-intro-case-study:before {
    content: '';
    width: 100%;
    background-image: url('/assets/images/white-round.png');
    display: none;
    position: absolute;
    top: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: 0;
    height: 282px
}

@media (min-width: 1024px) {
    .wrapp-intro-case-study:before {
        height:320px
    }
}

.wrapp-intro-case-study .card-title {
    position: relative;
    top: 75px
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .card-title {
        top:100px
    }
}

.wrapp-intro-case-study .card-title .h1 {
    color: white;
    font-size: 29px;
    line-height: 34px
}

@media (min-width: 1024px) {
    .wrapp-intro-case-study .card-title .h1 {
        font-size:45px;
        line-height: 1.2;
        margin-top: 30px
    }
}

.wrapp-intro-case-study .bg-strech {
    background-repeat: no-repeat;
    background-position: center 9px;
    background-size: cover;
    top: 0;
    height: 100vh;
    left: 0;
    width: 100%;
    z-index: -1;
    min-height: 600px;
    position: relative
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .bg-strech {
        min-height:100%;
        background-position: bottom;
        position: absolute
    }
}

.wrapp-intro-case-study .bg-strech:after {
    content: '';
    width: 100%;
    height: 100%;
    background-image: url('/assets/images/op-layer.png');
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1
}

.wrapp-intro-case-study .bg-strech .wrapp-link {
    position: absolute;
    bottom: 165px;
    left: 50%;
    transform: translate(-50%);
    width: 100%
}

.wrapp-intro-case-study .bg-strech .wrapp-link img {
    max-width: 177px;
    width: 100%
}

@media (min-width: 768px) {
    .wrapp-intro-case-study .bg-strech .wrapp-link img {
        max-width:inherit
    }
}

.wrapp-intro-case-study .bg-strech .list-hashtag {
    position: absolute;
    bottom: 20px;
    width: 100%;
    flex-wrap: wrap;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 15px
}

.wrapp-intro-case-study .bg-strech .list-hashtag a {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    letter-spacing: 0.7px;
    line-height: 18px
}

.section-case-study-content {
    margin-top: -12px
}

@media (min-width: 768px) {
    .section-case-study-content {
        margin-top:0px
    }
}

.section-case-study-content .wrapp-line {
    padding: 66px 0 80px;
    position: relative
}

.section-case-study-content .wrapp-line:last-child {
    padding: 80px 0 0
}

.section-case-study-content .card-title {
    position: relative
}

.section-case-study-content .card-title h1 {
    font-size: 38px
}

@media (min-width: 1024px) {
    .section-case-study-content .card-title h1 {
        font-size:45px
    }
}

.section-case-study-content .card-title:after {
    content: '';
    background-image: url('/assets/images/light-blue-line.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .section-case-study-content .card-title:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.section-case-study-content .card-descrip {
    margin-bottom: 30px
}

.section-case-study-content .card-descrip p {
    font-family: 'Centra No1';
    font-weight: 300;
    font-size: 14px;
    line-height: 21px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-case-study-content .card-descrip p {
        font-size:18px;
        line-height: 28px
    }
}

.section-case-study-content .arrow {
    position: absolute;
    left: 100px;
    bottom: -167px;
    z-index: 25;
    display: none
}

@media (min-width: 768px) {
    .section-case-study-content .arrow {
        display:block
    }
}

.section-case-study-content .wrapp-images {
    padding: 0 15px
}

.section-case-study-content .wrapp-images img {
    width: 100%;
    padding: 20px
}

.section-case-study-result {
    padding: 60px 0 180px;
    background-repeat: no-repeat;
    background-position: center 0;
    z-index: 0;
    width: 100%;
    background-image: url('/assets/images/double-layer-blues.svg');
    display: flex;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0;
    margin-top: -1px
}

@media (min-width: 1024px) {
    .section-case-study-result {
        min-height:1245px;
        background-size: cover
    }
}

.section-case-study-result .container {
    position: relative;
    z-index: 5
}

.section-case-study-result .bg-strech {
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1
}

@media (min-width: 1024px) {
    .section-case-study-result .bg-strech {
        min-height:600px
    }
}

@media (min-width: 1335px) {
    .section-case-study-result .bg-strech {
        min-height:800px
    }
}

.section-case-study-result .slide-results {
    flex-direction: column
}

@media (min-width: 1023px) {
    .section-case-study-result .slide-results {
        justify-content:space-between;
        flex-direction: row
    }
}

.section-case-study-result .card-title {
    text-align: center;
    position: relative
}

.section-case-study-result .card-title h1 {
    font-size: 38px
}

@media (min-width: 1024px) {
    .section-case-study-result .card-title h1 {
        font-size:63px
    }
}

.section-case-study-result .card-title:after {
    content: '';
    width: 60px;
    height: 20px;
    background-image: url('/assets/images/light-blue-line.svg');
    display: block;
    background-repeat: no-repeat;
    position: absolute;
    background-size: 60px;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%)
}

@media (min-width: 1335px) {
    .section-case-study-result .card-title:after {
        width:120px;
        height: 40px;
        background-size: 120px;
        bottom: 0px
    }
}

.section-case-study-result .card-title .h1,.section-case-study-result .card-title h1 {
    position: relative
}

.section-case-study-result .card-title .card-sub-title {
    top: 0;
    height: 100px;
    position: relative;
    display: none
}

@media (min-width: 1024px) {
    .section-case-study-result .card-title .card-sub-title {
        display:flex
    }
}

.section-case-study-result .card-title .card-sub-title:after {
    content: '';
    background-image: url('/assets/images/smile-orange-think.svg');
    background-repeat: no-repeat;
    display: block;
    width: 174px;
    height: 51px;
    position: absolute;
    top: 45px;
    left: 7px;
    background-size: 174px
}

.section-case-study-result .card-title .card-sub-title strong {
    color: #ff6c4d;
    font-family: 'Centra No1';
    font-size: 57px;
    font-weight: 900;
    line-height: 75px;
    position: relative;
    z-index: -1;
    transform: rotate(10deg)
}

@media (min-width: 768px) {
    .section-case-study-result .card-title .card-sub-title strong {
        font-size:73px
    }
}

.section-case-study-result .card-title .card-sub-title p {
    color: #ffad9f;
    font-size: 104px;
    font-weight: 400;
    font-family: 'Lucky Fellas';
    z-index: 1;
    display: block;
    transform: rotate(10deg);
    position: relative;
    top: -47px
}

@media (min-width: 768px) {
    .section-case-study-result .card-title .card-sub-title p {
        font-size:95px
    }
}

.section-case-study-result .wrapp-bottom-results {
    padding-top: 35px;
    padding-bottom: 50px;
    position: relative;
    top: 159px
}

@media (min-width: 430px) {
    .section-case-study-result .wrapp-bottom-results {
        padding-top:70px;
        padding-bottom: 80px;
        position: relative;
        top: 120px
    }
}

@media (min-width: 1024px) {
    .section-case-study-result .wrapp-bottom-results {
        padding-top:50px;
        padding-bottom: 80px;
        position: relative;
        top: 120px
    }
}

.section-case-study-result .wrapp-bottom-results .card-title {
    margin-bottom: 0
}

@media (min-width: 430px) {
    .section-case-study-result .wrapp-bottom-results .card-title {
        margin-bottom:20px
    }
}

.section-case-study-result .wrapp-bottom-results .card-title h1 {
    line-height: 28px
}

.section-case-study-result .card-descrip {
    max-width: 840px;
    margin: -90px auto 20px;
    margin-bottom: 50px;
    position: relative;
    top: 35px
}

@media (min-width: 1024px) {
    .section-case-study-result .card-descrip {
        margin-bottom:100px;
        margin: -130px auto 20px
    }
}

.section-case-study-result .card-descrip p {
    color: #707070;
    font-size: 14px;
    line-height: 21px;
    font-weight: 300
}

@media (min-width: 768px) {
    .section-case-study-result .card-descrip p {
        font-size:18px;
        line-height: 28px
    }
}

.section-case-study-result .card-descrip p a {
    color: #707070
}

.section-case-study-result .sub-title {
    position: relative;
    top: 25px;
    padding-bottom: 40px
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title {
        top:10px
    }
}

.section-case-study-result .sub-title strong {
    font-size: 69px;
    font-weight: 900;
    line-height: 40px;
    text-transform: uppercase;
    font-family: 'Centra No1';
    margin: 0;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title strong {
        font-size:85px;
        font-weight: 900;
        line-height: 175px
    }
}

.section-case-study-result .sub-title p {
    font-family: 'Lucky Fellas';
    font-size: 61px;
    font-weight: 400;
    position: relative;
    top: -19px;
    transform: rotate(-5deg)
}

@media (min-width: 1024px) {
    .section-case-study-result .sub-title p {
        font-size:85px;
        font-weight: 400;
        top: -90px
    }
}

.section-case-study-result blockquote {
    max-width: 768px;
    margin: 0 auto;
    position: relative
}

.section-case-study-result blockquote:before {
    content: '';
    background-image: url('/assets/images/qcs.svg');
    width: 40px;
    height: 36px;
    display: block;
    position: absolute;
    left: 0px;
    top: -42px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote:before {
        left:-25px;
        top: -25px
    }
}

.section-case-study-result blockquote:after {
    content: '';
    background-image: url('/assets/images/qcs-2.svg');
    width: 40px;
    height: 36px;
    display: block;
    position: absolute;
    right: 0px;
    bottom: -40px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote:after {
        right:-25px;
        bottom: -25px
    }
}

.section-case-study-result blockquote p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 900;
    letter-spacing: 1.2px;
    line-height: 18px;
    padding: 0 30px
}

@media (min-width: 1024px) {
    .section-case-study-result blockquote p {
        font-size:25px;
        line-height: 33px
    }
}

.section-images-pro {
    margin-top: -141px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-images-pro {
        margin-top:-231px
    }
}

.wrapp-intro-la-jabox:before {
    content: '';
    width: 100%;
    height: 78px;
    background-image: url('/assets/images/light-orange-round.png');
    display: block;
    position: absolute;
    top: 0;
    background-position: center -5px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    z-index: -1
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox:before {
        height:300px
    }
}

.wrapp-intro-la-jabox .card-title {
    margin-top: 110px
}

.wrapp-intro-la-jabox .card-title .h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox .card-title .h1 {
        font-size:57px;
        line-height: 85px
    }
}

.wrapp-intro-la-jabox .card-title .h1 img {
    width: 138px
}

@media (min-width: 768px) {
    .wrapp-intro-la-jabox .card-title .h1 img {
        width:auto
    }
}

.section-la-jabox-content {
    padding: 140px 0 50px
}

@media (min-width: 768px) {
    .section-la-jabox-content {
        padding:300px 0 150px
    }
}

.section-la-jabox-content .card-title {
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title {
        margin-bottom:128px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .card-title {
        margin-bottom:0
    }
}

.section-la-jabox-content .card-title h1 {
    font-size: 36px;
    line-height: 39px
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-title h1 {
        font-size:57px;
        line-height: 85px
    }
}

.section-la-jabox-content .card-title .line {
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%)
}

.section-la-jabox-content .row {
    margin-bottom: 25px
}

@media (min-width: 768px) {
}

.section-la-jabox-content .col-12 {
    margin-bottom: 50px
}

.section-la-jabox-content .col-12:last-child {
    box-shadow: 0 -13px 18px rgba(0, 0, 0, 0.16);
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-12:last-child {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .col-item {
    padding: 15px 0px 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .col-item {
        box-shadow:none;
        padding: 0 15px
    }
}

.section-la-jabox-content .card-img img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .card-img img {
        opacity:1
    }
}

.section-la-jabox-content .decorize1 {
    top: -205px;
    left: 52%;
    transform: translateX(-50%)
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize1 {
        top:-205px;
        left: 86px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .decorize1 img {
    opacity: 0.4
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize1 img {
        opacity:1
    }
}

.section-la-jabox-content .decorize2 {
    background-image: url('/assets/images/min-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 20px;
    top: -150px;
    left: -10px;
    max-width: 250px;
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 {
        top:30px;
        padding: 27px 20px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize2 {
        right:-80px
    }
}

.section-la-jabox-content .decorize2 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize2 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize2 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize2 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize3 {
    background-image: url('/assets/images/min-left-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 20px 20px;
    top: -20px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 {
        top:95px;
        padding: 27px 20px;
        left: -10px;
        right: inherit
    }
}

@media (min-width: 1370px) {
    .section-la-jabox-content .decorize3 {
        left:-40px
    }
}

.section-la-jabox-content .decorize3 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize3 p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize3 .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize3 .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 {
    background-image: url('/assets/images/big-right-orange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 100px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 {
        top:230px;
        right: -5px;
        left: inherit
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize4 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize4 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize4 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize4 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize4 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize5 {
    background-image: url('/assets/images/big-left-prange.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 290px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 {
        top:280px;
        left: -5px;
        right: inherit
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize5 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .decorize5 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize5 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize5 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize5 p {
        font-size:17px
    }
}

.section-la-jabox-content .decorize6 {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: 470px;
    left: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 {
        top:430px;
        right: -10px;
        left: inherit
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .decorize6 {
        right:-50px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor {
    padding: 20px 20px 0px;
    position: relative
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor {
        padding:27px 20px 15px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .decorize6 .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile {
    display: inline-block;
    margin-left: 10px
}

.section-la-jabox-content .decorize6 .wrapp-decor .wrapp-smile img {
    margin-right: 5px
}

.section-la-jabox-content .decorize6 .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .decorize6 p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .decorize6 p {
        font-size:17px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .col-item-wrapp {
        margin-top:100px
    }
}

.section-la-jabox-content .wrapp-text {
    margin-left: 0px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .wrapp-text {
        margin-left:130px;
        margin-top: 33px
    }
}

.section-la-jabox-content .wrapp-text .title-text {
    margin-bottom: 50px;
    padding: 0 15px
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text {
        padding:0
    }
}

.section-la-jabox-content .wrapp-text .title-text strong {
    font-size: 30px;
    font-weight: 700;
    font-family: 'Centra No1';
    font-weight: bold
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text .title-text strong {
        font-size:34px
    }
}

.section-la-jabox-content .wrapp-text ul {
    padding: 0;
    margin: 0
}

.section-la-jabox-content .wrapp-text ul li {
    margin-bottom: 20px;
    padding: 0 15px;
    border-bottom: 1px solid #ececec
}

.section-la-jabox-content .wrapp-text ul li:first-child {
    padding-top: 12px;
    border-top: 1px solid #ececec
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li:first-child {
        border-top:none;
        padding-top: 0
    }
}

.section-la-jabox-content .wrapp-text ul li:last-child {
    margin-bottom: 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .wrapp-text ul li {
        padding:0;
        border-bottom: none
    }
}

.section-la-jabox-content .wrapp-text ul li .title {
    color: #707070;
    font-family: 'Centra No1';
    font-weight: bold;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px
}

.section-la-jabox-content .wrapp-text ul li .descrip {
    color: #707070;
    font-family: 'Centra No1';
    font-size: 18px;
    line-height: 28px
}

.section-la-jabox-content .bottom {
    width: 100%;
    padding: 0px 0 0
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom {
        padding:150px 0 0
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom {
        padding:0
    }
}

.section-la-jabox-content .bottom .card-img {
    margin-bottom: 35px
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .card-img {
        margin-bottom:0
    }
}

.section-la-jabox-content .bottom .card-img img {
    max-width: 226px;
    width: 100%;
    opacity: 1;
    margin-top: 10px
}

.section-la-jabox-content .bottom .decorize1 {
    text-align: center;
    transform: translateX(0);
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 {
        position:absolute;
        transform: translateX(-50%);
        top: -145px
    }
}

@media (min-width: 1200px) {
    .section-la-jabox-content .bottom .decorize1 {
        top:-205px;
        left: 42px;
        transform: translateX(0)
    }
}

.section-la-jabox-content .bottom .decorize1 img {
    width: 100%
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize1 img {
        width:auto
    }
}

.section-la-jabox-content .bottom .wrapp-opt {
    z-index: -1
}

.section-la-jabox-content .bottom .decorize {
    background-image: url('/assets/images/big-right-blue.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    max-width: 250px;
    width: 100%;
    top: -185px;
    right: -10px
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize {
        position:absolute;
        z-index: 22
    }
}

@media (min-width: 1450px) {
    .section-la-jabox-content .bottom .decorize {
        top:-131px;
        right: -82px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor {
    padding: 27px 20px 15px;
    position: relative
}

.section-la-jabox-content .bottom .decorize .wrapp-decor:after {
    content: '';
    height: 1px;
    width: 100%;
    display: block;
    background-color: #fff;
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0.6
}

.section-la-jabox-content .bottom .decorize .wrapp-decor p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 16px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize .wrapp-decor p {
        font-size:20px
    }
}

.section-la-jabox-content .bottom .decorize .wrapp-decor .wrapp-smile {
    display: inline-block
}

.section-la-jabox-content .bottom .decorize .more-info {
    padding: 12px 20px 26px
}

.section-la-jabox-content .bottom .decorize p {
    color: #fff;
    font-family: 'Centra No1';
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    display: inline-block
}

@media (min-width: 768px) {
    .section-la-jabox-content .bottom .decorize p {
        font-size:17px
    }
}

.slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent
}

.slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0
}

.slick-list:focus {
    outline: none
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand
}

.slick-slider .slick-track,.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block
}

.slick-track:before,.slick-track:after {
    content: \"\";
    display: table
}

.slick-track:after {
    clear: both
}

.slick-loading .slick-track {
    visibility: hidden
}

.slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none
}

[dir=\"rtl\"] .slick-slide {
    float: right
}

.slick-slide img {
    display: block
}

.slick-slide.slick-loading img {
    display: none
}

.slick-slide.dragging img {
    pointer-events: none
}

.slick-initialized .slick-slide {
    display: block
}

.slick-loading .slick-slide {
    visibility: hidden
}

.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent
}

.slick-arrow.slick-hidden {
    display: none
}

.slide-tab-case {
    width: 100% !important;
    position: relative;
    margin-left: 0px
}

@media (min-width: 1024px) {
}

.slide-tab-case .slick-list {
    width: 100% !important;
    overflow: inherit !important
}

.slide-tab-case .slick-track {
    display: block
}

.slide-tab-case .slide-item {
    max-width: 240px;
    width: 100% !important;
    height: 100%;
    margin: 0 10px
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item {
        margin:0 45px
    }
}

.slide-tab-case .slide-item .box-info {
    max-width: 214px;
    width: 100% !important;
    height: 214px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #ffad9f;
    position: relative;
    transition: 0.3s
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item .box-info {
        max-width:300px;
        width: 100% !important;
        height: 300px
    }
}

.slide-tab-case .slide-item .box-info:hover {
    transform: scale(1.1)
}

.slide-tab-case .slide-item .card-img {
    background-size: cover;
    background-position: center;
    transition: 0.3s;
    background-repeat: no-repeat;
    border-radius: 30px 30px 0 0
}

.slide-tab-case .slide-item .text-holder {
    position: absolute;
    left: 0;
    bottom: 0;
    background: white;
    width: 100%;
    min-height: 32%;
    border-radius: 0 0 30px 30px
}

.slide-tab-case .slide-item .text-holder p {
    color: #404040;
    font-family: 'Centra No1';
    font-size: 28px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 30px
}

@media (min-width: 768px) {
    .slide-tab-case .slide-item .text-holder p {
        font-size:16px;
        line-height: 19px;
        margin: 18px;
        letter-spacing: 1px
    }
}

.section-josepho-content.customize .slide-josepho {
    margin: 0px auto 80px
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho {
        margin:-15px auto 80px
    }
}

.section-josepho-content.customize .slide-josepho .card-text {
    padding: 15px 0
}

.section-josepho-content.customize .slide-josepho .card-text p {
    color: #fff;
    font-family: 'Lucky Fellas';
    font-size: 79px;
    font-weight: 400;
    z-index: 1;
    position: relative
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho .card-text p {
        font-size:118px
    }
}

.section-josepho-content.customize .slide-josepho .card-text strong {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 56px;
    font-weight: 900;
    line-height: 40px;
    transform: rotate(-5deg);
    display: block;
    margin-top: 0px;
    padding-bottom: 15px;
    z-index: -1
}

@media (min-width: 768px) {
    .section-josepho-content.customize .slide-josepho .card-text strong {
        font-size:75px
    }
}

.slide-josepho {
    max-width: 570px;
    margin: 0px auto 80px
}

@media (min-width: 768px) {
    .slide-josepho {
        margin:-60px auto 80px
    }
}

.slide-josepho .slide-item {
    margin: 0 20px
}

.slide-josepho .slick-track {
    text-align: center
}

.slide-josepho .card-text p {
    color: #fff;
    font-family: 'Lucky Fellas';
    font-size: 79px;
    font-weight: 400;
    z-index: 1;
    position: relative
}

@media (min-width: 768px) {
    .slide-josepho .card-text p {
        font-size:136px
    }
}

.slide-josepho .card-text strong {
    color: #90dade;
    font-family: 'Centra No1';
    font-size: 56px;
    font-weight: 900;
    line-height: 40px;
    transform: rotate(-5deg);
    display: block;
    margin-top: -20px;
    padding-bottom: 15px;
    z-index: -1
}

@media (min-width: 768px) {
    .slide-josepho .card-text strong {
        font-size:98px
    }
}

.slide-josepho .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.slide-josepho .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.slide-josepho .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow img {
        width:auto
    }
}

.slide-josepho .slick-arrow:hover i {
    opacity: 0.8
}

.slide-josepho .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .slide-josepho .slick-arrow.slick-prev {
        left:-1%
    }
}

.slide-josepho .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .slide-josepho .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .slide-josepho .slick-arrow.slick-next {
        right:-1%
    }
}

.slide-trust {
    width: 100% !important;
    max-width: 500px;
    overflow: hidden;
    margin: 0 auto;
    padding: 0 20px
}

@media (min-width: 440px) {
    .slide-trust {
        max-width:450px;
        padding: 0 30px
    }
}

@media (min-width: 540px) {
    .slide-trust {
        max-width:480px
    }
}

.slide-trust .slick-list {
    width: 100% !important;
    overflow: inherit !important
}

.slide-trust .slick-track {
    display: flex;
    align-items: center
}

.slide-trust .slide-item {
    width: 100px;
    text-align: center;
    margin: 0 5px
}

@media (min-width: 540px) {
    .slide-trust .slide-item {
        width:154px
    }
}

.slide-trust .slide-item .slide-box {
    transform: scale(0.5)
}

.slide-trust .slide-item img {
    width: 100%
}

.slide-trust .slide-item.slick-current .slide-box,.slide-trust .slide-item.tmp-center .slide-box {
    transform: scale(1)
}

.slide-trust .slide-item.slick-current img,.slide-trust .slide-item.tmp-center img {
    width: 100%
}

.slide-trust .slide-item.no-anim .slide-box,.slide-trust .slide-item.no-anim img {
    animation: none
}

.slide-trust .slide-item .box-info {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
    background-color: #ffad9f;
    position: relative
}

.slide-trust .slide-item .text-holder {
    position: absolute;
    left: 30px;
    bottom: 30px;
    color: #fff;
    font-family: 'Centra No1';
    font-size: 45px;
    font-weight: 700;
    letter-spacing: -1.8px;
    line-height: 50px
}

.slide-trust .slide-item .card-img {
    text-align: center
}

.slide-trust .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.slide-trust .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.slide-trust .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow img {
        width:auto
    }
}

.slide-trust .slick-arrow:hover i {
    opacity: 0.8
}

.slide-trust .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .slide-trust .slick-arrow.slick-prev {
        left:-1%
    }
}

.slide-trust .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .slide-trust .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .slide-trust .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide {
    max-width: 570px;
    margin: 30px auto 80px
}

.min-slide .slide-item {
    margin: 0 20px
}

.min-slide .slick-track {
    text-align: center
}

.min-slide h2,.min-slide span.h2 {
    margin-bottom: 0;
    color: #ff6c4d;
    position: relative;
    padding: 15px 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .min-slide h2,.min-slide span.h2 {
        font-size:45px
    }
}

.min-slide h2:after,.min-slide span.h2:after {
    content: '';
    background-image: url('/assets/images/line-orange.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .min-slide h2:after,.min-slide span.h2:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.min-slide .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide .slick-arrow img {
        width:auto
    }
}

.min-slide .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide .slick-arrow.slick-prev {
        left:-1%
    }
}

.min-slide .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide2 {
    max-width: 570px;
    margin: 30px auto 40px
}

@media (min-width: 768px) {
    .min-slide2 {
        margin:30px auto 80px
    }
}

.min-slide2 .slide-item {
    margin: 0 20px
}

.min-slide2 .slick-track {
    text-align: center
}

.min-slide2 h2,.min-slide2 span.h2 {
    margin-bottom: 0;
    color: #3975fc;
    position: relative;
    padding: 15px 0;
    font-size: 38px
}

@media (min-width: 768px) {
    .min-slide2 h2,.min-slide2 span.h2 {
        font-size:45px
    }
}

.min-slide2 h2:after,.min-slide2 span.h2:after {
    content: '';
    background-image: url('/assets/images/line-blue.svg');
    background-repeat: no-repeat;
    width: 75px;
    height: 8px;
    background-size: 75px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 7px
}

@media (min-width: 768px) {
    .min-slide2 h2:after,.min-slide2 span.h2:after {
        width:125px;
        height: 20px;
        background-size: 125px
    }
}

.min-slide2 .text-holder p {
    font-family: 'Centra No1';
    font-size: 18px;
    font-weight: 300;
    line-height: 28px;
    color: #707070
}

.min-slide2 .slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
    z-index: 25
}

.min-slide2 .slick-arrow i {
    color: #fff;
    font-size: 11px
}

.min-slide2 .slick-arrow img {
    width: 10px
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow img {
        width:auto
    }
}

.min-slide2 .slick-arrow:hover i {
    opacity: 0.8
}

.min-slide2 .slick-arrow.slick-prev {
    left: 0%
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow.slick-prev {
        left:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide2 .slick-arrow.slick-prev {
        left:-1%
    }
}

.min-slide2 .slick-arrow.slick-next {
    right: 0%
}

@media (min-width: 480px) {
    .min-slide2 .slick-arrow.slick-next {
        right:-1%
    }
}

@media (min-width: 1300px) {
    .min-slide2 .slick-arrow.slick-next {
        right:-1%
    }
}

.min-slide-blue {
    max-width: 570px;
    margin: 30px auto 30px
}

@media (min-width: 768px) {
    .min-slide-blue {
        margin:30px auto 80px
    }
}

.min-slide-blue .slick-arrow {
    position: absolute;
    top: 20%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
}

}

}