### Web Server

## Intro
Juliar.Future comes with a built in WebServer, but Juliar can run as a servlet. This means that you can use
 WebServers such as Apache Tomcat and Eclipse Jetty to server files. For WebMasters, it may be more advantageous to run
 Juliar as a servlet for higher customization.
 `http://localhost` should output some content. Juliar files use `.jrl` extension
and are coded the same way any other application is being coded. Juliar reads files and **interprets** them, and serves
the output. Juliar server does not currently support serving the files compiled by Juliar application. Instead, if you
plan to use Juliar as a Web Server, please place the source files to where Juliar server can server them.

## What external Web Servers are supported?
We have currently tested Juliar Server in servlet mode on Apache Tomcat and even provide an example of the servlet in
the source files. However, we are sure that Juliar works on any server that runs servlets.
