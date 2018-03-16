# FAQs


## What is Juliar?

Juliar is a free to use open source programming language. It is created for rapid prototyping and the ability to easily code and run on any platform.
## Is Juliar Copyrighted?

Juliar is under the GNU GENERAL PUBLIC LICENSE Version 3, see the license, in the repository folder for information: [LICENSE](https://github.com/juliarLang/juliar/blob/master/LICENSE)

## How can I start coding in Juliar?

See Getting Started Section. If you are still having problems, feel free to check out the forums or join the slack channel: https://juliarlang.slack.com. We also provide a few tutorials on our [YouTube Channel](https://www.youtube.com/channel/UCRkKqD0fnuVAJLJe9p4ZiKQ).

## Do you have an IDE or a TextEditor where I can write the code?

Double click on Juliar.jar comes with built in editor that renders through WebBrowser. Whenever you double click on Juliar.jar, an editor should popup in your default Web Browser.
Juliar uses port `80` in order to launch a GUI/server. If the port 80 is used by another application, Operating System will automatically pick an available port to use. 
If you use that port for something else, or you would like to use a different port such as port 8080, simply specify port parameter i.e.
`Juliar.jar -port 8080`.


## I want to replace Juliar as a replacement of PHP or other WebServers... How can I do it?

Juliar has a built in server, so whenever Juliar launches it creates a server on port `80`. You can open up your firewall
or do table forwarding in order to use Juliar as a WebServer. Juliar can also run as a servlet which allows one to use Tomcat
or any other server that supports Servlet. Some users may prefer to use an external server as it allows more configurations.