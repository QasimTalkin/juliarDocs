# Getting Started


### Installation

Download Juliar from https://www.juliar.org/downloads.php

After downloading the JAR file, you have 2 ways to launch it.
If you are a beginner or preffer a Graphical Window, then you can just double click juliarCompiler.jar

If you prefer a console/terminal, then open juliarCompiler.jar folder in terminal/console. 

# Modes
JuliarCompiler.jar works in 3 modes. It can be compiled, interpreted, and ran through FastCGI web services.

# Compile
JuliarCompiler.jar works on all platforms that have JAVA installed. So it is system independent!
run it in CommandPrompt/Console using the following command:

`
java -jar JuliarCompiler.jar something.jrl output
`

Where something.jrl is Juliar script and output is output name.
Because Juliar compiles directly into JAVA bytecode, Juliar programs can run anywhere JAVA is installed.

# Interpret
JuliarCompiler.jar can also interpret code for those people that want to tweak and tinker with the code on the go.
You can have Juliar interpret by leaving out the output argument

`
java -jar JuliarCompiler.jar something.jrl
`
This will interpret the code and output the results on the screen. You can pipe the results to a file by using '>' followed by file name.

# FastCGI
JuliarCompiler.jar can also run as web service. This is a second form of interpreter. You can connect JuliarCompiler.jar
to Apache, NGINX, Lighttpd, and many other services to process HTML files and output results to the user. JuliarCompiler.jar
makes it very easy to have a web server running by providing configurations for most popular web servers.
To launch JuliarCompiler.jar in FastCGI mod:

`
java -jar -DFCGI_PORT=9000 JuliarCompiler.jar
`


# Why?
You might be wondering, why should you use Juliar instead of JAVA? The reason is that Juliar is less imperative
and more functional. It can however be used as Object Oriented programming language. Juliar aim is to provide
the same features of any modern imperative language such as C++ and JAVA and put a twist by adding functional components.
Juliar is easy, fast, and fun language to use.

# Creating Juliar File
Create a text file called "something.jrl". jrl is the extension juliar uses for its files! You can name it anything you want as long as it has an extension of .jrl.
First you need a main function,
`
function main() = {
}
`
The main function is the entry point of the code. If you do not have a main function, that means the code cannot be ran directly. The point of having the main function
is so that when code run directly it will perform some action. You might not need to perform that action if the code is included in.
Please keep in mind that if you have a main function in an included script, it won't run unless you explicitly call the main function in that included script.

# Creating and calling a custom function

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

# Hoisting

Juliar supports function hoisting. Unlike C/C++, functions can be declared in any order (even if they are declared after a functional call).

# Dynamic or Static Casting

Juliar supports both static and dynamic casting. It is, however, recommended that you static type variables (i.e. declare their type such as int, float, double, etc)
and dynamic cast the function, so that you don't need to create a template.

# Function Overloading

Juliar currently doesn't support overloading. However, this may change in the future. Let us know how you feel!

# Variable Declaration

Variables are declared using one of the following declarations: `int`, `double`, `float`, `string`, `obj`. Please note, if you are not sure what type it is going to be, you can let the compiler
decide by using `var` instead.

# Printing to Screen
Juliar has lots of options for printing to the screen. If you just want to print, use `printLine("Hello Me");` . If you know the type, or want to cast it to a different type,
consider using `printInt(64);`, `printFloat(2.3);`, `printDouble(.312321);`.

# Writing/Opening Files

Juliar uses "Open Format" standard for opening and storing files. Hence, it should potentially work on all Operating Systems. To Open a file just do
`
fileOpen("filename");
`

# Prefix Notation

Juliar allows prefix notation. That means you can arithmetic functions such as +,-,/,* and % before each operation and it will apply to everything after it.
For example, you can do:

`
int x = + 3 2 5 10;
`

which is the equivalent of doing

`
int x = 3 + 2 + 5 + 10;
`

This is useful in doing when you are having a huge file.



### Installing from Source


Download the latest version from https://www.github.com/juliarLang/juliarFuture

or Clone in Desktop: 

Once downloaded and unzipped, deppending on your system
double click on DoEverything.bat if on Windows
or DoEverything.sh if on Linux, Mac, or UNIX.

If you are compiling on Windows, make sure your classpath
is set correctly.