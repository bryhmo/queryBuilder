<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class fluentStringsController extends Controller
{
  //FLUENT STRING STRING IN LARAVEL

        //after
        function after(){
            $after = Str::of("This is my name")
                    ->after('This is');
            if($after){
                return dd($after);
            }
            else
            {
                return "error!!! something went wrong ";
            }

        }

        //before
        function before(){
            $slice2 = Str::of('This is my name')->before('name');
            return  dd($slice2);
        }


        //before
        function afterLast(){
            $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
            return  dd($slice2);
        }

        //before
        function append(){
            $string = Str::of('Taylor')->append(' Otwell');
            return  dd($string);
        }


        //before
        function beforeLast(){
            $slice2 = Str::of('This is my name')->beforeLast('is');
            return  dd($slice2);
        }


        //before
        function betweenFirst(){
            $converted = Str::of('[a] bc [d]')->betweenFirst('[', ']');
            return  dd($converted);
        }


        //before
        function Between(){
            $converted = Str::of('This is my name')->between('This', 'name');
            return  dd($converted);
        }

        //before
        function Camel(){
            $converted = Str::of('foo_bar')->camel();
            return  dd($converted);
        }

        //contains
        function contains(){
            $contains = Str::of('This is my name')->contains('my');
            $contains = Str::of('This is my name')->contains(['my', 'foo']);
            return  dd($contains);
        }
        //endsWith
        function endsWith(){
            $result = Str::of('This is my name')->endsWith('name');
            return  dd($result);
        }
        //exactly
        function exactly(){
            $result = Str::of('Laravel')->exactly('Laravel');
        
            return  dd($result);
        }

        //finish
        function finish(){
            $adjusted = Str::of('this/string')->finish('/');
        
            return  dd($adjusted);
        }

        function isEmpty(){
        
            $result = Str::of('  ')->trim()->isEmpty();
 
            $result = Str::of('Laravel')->trim()->isEmpty();
        }
 
        //isNotEmpty
        function isNotEmpty(){
            $result = Str::of('Laravel')->trim()->isNotEmpty();
            $result = Str::of('  ')->trim()->isNotEmpty();
        }

        //isjson
        function isjson(){

            $result = Str::of('[1,2,3]')->isJson(); // true
        

        
            $result = Str::of('{"first": "John", "last": "Doe"}')->isJson();
        

        
            $result = Str::of('{first: "John", last: "Doe"}')->isJson();


        }

        //LCfirst
        function LCfirst(){
            $string = Str::of('Foo Bar')->lcfirst();
        }
        //kebab
        function kebab(){
            $converted = Str::of('fooBar')->kebab();
        }

        //isUrl
        function IsUrl(){
            $result = Str::of('http://example.com')->isUrl();
            $result = Str::of('Taylor')->isUrl();
        }

        //lower
        function lower(){
            $result = Str::of('LARAVEL')->lower();
        }

        //limit
        function limit(){
            $truncated = Str::of('The quick brown fox jumps over the lazy dog')->limit(20, ' (...)');
        }


        //mask
        function Mask(){
            $string = Str::of('taylor@example.com')->mask('*', 3);
            $string = Str::of('taylor@example.com')->mask('*', -15, 3);
            $string = Str::of('taylor@example.com')->mask('*', 4, -4);
        }


 

}
