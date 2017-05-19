# Troubleshooting

## Linux Double Click Problem

On Some versions of linux, when you double click on the JuliarCompiler.jar an archive window opens up instead of the edtitor.

There is an easy way to fix this:

Go to `/usr/share/applications` and create a file `myjava.desktop`

Open `myjava.desktop` and put the following:

```[Desktop Entry]
 Name=Java Environment
 Comment=Java Launcher
 Exec=java -jar %f
 Terminal=false
 Type=Application
 Icon=
 MimeType=application/x-java-archive;application/java-archive;application/x-jar;
 NoDisplay=true
```

Save the file and logout from your computer.

Log back in and right click on `JuliarCompiler.jar` file.
Now Look for an application called `Java Environment` and select that application.
Click apply or ok.

Now you should be able to launch JuliarCompiler.jar just by double clicking.

If you are still having trouble or unable to do so.
You can always launch the editor via `java -jar JuliarCompiler.jar -app`