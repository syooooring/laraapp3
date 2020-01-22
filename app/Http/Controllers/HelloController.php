<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    global $head, $style, $body, $end;
    $head = '<html><head>';
    $style = <<<EOF
    <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
    </style>
    EOF;
    $body = '</head><body>';
    $end = '</body></html>';

    function tag($tag, $txt) {
        return "<{$tag}>" . $txt . "</{$tag}>";
    }
    class HelloController extends Controller
    {
        public function index() {
            global $head, $style, $body, $end;

            $html = $head . tag('title','Hello/Index') . $style . 
                $body
                . tag('h1','index') . tag('p','this is index page')
                . '<a href="/hello/other">go to Other page</a>'
                . $end;
            return $html;
        }
    }
}