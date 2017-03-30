# Webserver

## Intro
Juliar.Future can be ran as FastCGI for executing on web. This can be useful for people writing web server programs to execute Juliar Code and provide results on the go.
In order to use FastCGI as service, you must first run Juliar with FastCGI option and then start the server of your choice.
It is recommended that you test the server first to make sure it is working by creating a simple `index.html` file and
placing a basic code into it. http://localhost should output some content. Juliar files use `.jrl` extension
and are coded the same way any other application is being coded. Juliar uses **interpreter** mode in order to
read the files and output the results. Please do not compile the files, otherwise Juliar FCGI mod won't be able
to read them.

## What Web Servers are supported?
Almost any web server is supported as long as it provides some form of FastCGI protocol.
We have provided configurations for Apache, NGINX, Lighttpd, and Jetty. Every operating system is supported.
We suggest using NGINX with juliar.Future. Although, Apache works very well too.

## Apache
Open up `apache_add_to_httpd.conf` file and follow the instructions

## Nginx
Depending on your system, take the appropriate `nginx_`OS`.conf`
and rename it to `nginx.conf` put the file into appropriate nginx conf
directory. It will ask you to overwrite the file. click yes.

## Lighttpd
Launching lighttpd server is as easy as doing
`lighttpd -D -f lighttpd.conf`
This should start the server.

## Jetty
Copy the jetty.xml file to your Jetty home directory.
Launch Jetty by doing
`java -jar $JETTY_HOME/start.jar --add-to-start=fcgi,http,deploy`

## Starting FastCGI
Look at `LaunchFCGI.bat` script and `LaunchFCGI.sh` to find out how
to launch JuliarCompiler.jar as FastCGI process. It is very straightforward.
It is as easy as:

`
java -jar -DFCGI_PORT=9000 JuliarCompiler.jar
`
where `-DFCGI_PORT` is the port you want to use for the application.
