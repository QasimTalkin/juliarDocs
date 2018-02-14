### Getting Started

## Download
The latest stable release can be found at:

https://juliar.org/downloads

## Install

Download Juliar from 
https://juliar.org/downloads

You do not need to install anything as Juliar comes in portable pack: `Juliar.jar` that contains everything needed  to run
and compile making Juliar highly portable.


## Interpreting through GUI
You can launch Juliar by double clicking `Juliar.jar`. NOTE: Some Linux versions will open the archive instead of executing it.
In that case, follow the guidelines specified in troubleshooting. The GUI should be straight forward and easy to use.
You can also launch the GUI by running `./Juliar.jar` (or `Juliar.jar`) in Terminal/Command Prompt without parameters
and that would also launch the GUI.


## Interpreting through Command console

If you do not want to use GUI, but instead just want to interpret a file, simply execute the following:
`
java -jar juliar.jar something.jlr
`

This will output the result to the screen. If you want to save the result to a file, simply do:

`
 java -jar juliar.jar something.jlr > outputJARname
`

Where something.jlr is Juliar script and output is output name.

NOTE: If you want to distribute the program, you should distribute it with the current version of `Juliar.jar`.


## Running a WebServer
Juliar has a built in server, so whenever Juliar launches its GUI, it creates a server on port `48042`. You can open up your firewall
or do table forwarding in order to use Juliar as a WebServer. Juliar can also run as a servlet which allows one to use Tomcat
or any other server that supports Servlet. Some users may prefer to use an external server as it allows more configurations.
`


## Why?
You might be wondering, why should you use Juliar instead of any other programming languages.
The reason is that Juliar is highly portable with no installation. The only requirement is Java Virtual Machine
environment which is practically available on any platform. With Juliar, you can create rapid prototypes in simple,
easy to read code. With Juliar, you can code and run on any platform.


## Creating Juliar File
Create a text file called "something.jlr". jlr is the extension juliar uses for its files! You can name it anything you want as long as it has an extension of .jlr.
First you need a main function,
`
function main() = {
}
`
The main function is the entry point of the code. If you do not have a main function, that means the code cannot be ran directly. The point of having the main function
is so that when code run directly it will perform some action. You might not need to perform that action if the code is included in.
Please keep in mind that if you have a main function in an included script, it won't run unless you explicitly call the main function in that included script.

## Creating and calling a custom function

Creating a custom function is very simple:

`function foo() = {
}
`

Where foo is function name. You might be wondering why is there an equal sign? The reason is that '=' sign copies the content of {} into a callable function.
Juliar is also partly a functional language and if you do not include '='. Juliar would think that you are getting back an object from foo() call and applying {}
on it. So potentially you can have something like function foo(x){3,2} = { return x+$} which will return x+3,x+2 as an object array.
Calling a function is very simple:

`
functionToCall(x,y);
`

Where x and y are variables. You can call custom functions the same way.

## Hoisting

Juliar uses function hoisting. Unlike C/C++, functions can be declared in any order (even if they are declared after a functional call).

## Function Overloading

Juliar currently doesn't support overloading. However, this may change in the future. Let us know how you feel!

## Variable Declaration

Variables are declared using one of the following declarations: `int`, `double`, `float`, `string`, `obj`. Please note, if you are not sure what type it is going to be, you can let the compiler
decide by using `var` instead.

## Printing to Screen
There are two function calls you should know in order to print in Juliar.
They are `printLine` and `print`. The difference is that `printLine` adds
a new line character, while `print` does not. Common uses `print(64);`, `print(2.3);`, `printLine("Brighter Future");`.

## Creating Classes
With Juliar, you don't need to use "new" to create an instance of a class.
```
class node = {
    int data;
}

function main() = {
    node one;
    one::data;
}
```

## Writing/Opening Files

Juliar uses "Open Format" standard for opening and storing files. Hence, it should potentially work on all Operating Systems. To Open a file just do
`
fileOpen("filename");
`

## Prefix Notation

Juliar allows prefix notation. That means you can arithmetic functions such as +,-,/,* and % before each operation and it will apply to everything after it.
For example, you can do:

`
int x = + 3 2 5 10;
`

which is the equivalent of doing

`
int x = 3 + 2 + 5 + 10;
`


## Installing from Source


Download the latest version from https://www.github.com/juliarLang/juliar

or Clone in Desktop: 

Once downloaded and unzipped, deppending on your system
double click on DoEverything.bat if on Windows
or DoEverything.sh if on Linux, Mac, or UNIX.

If you are compiling on Windows, make sure your classpath
is set correctly.