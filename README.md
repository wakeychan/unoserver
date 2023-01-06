# unoserver
moodle files converter plugins

1. 安装 [Libreoffice](https://www.libreoffice.org/) （PS：记住安装路径）
2. 安装 [unoserver](https://github.com/unoconv/unoserver) （PS：要用安装libreoffice的python来安装unoserver）
3. 文件 unoserver 为服务启动文件，用来开启unoserver服务，放在`/etc/init.d`目录下，用service命令启动，文件中LIBREOFFICE的配置需要根据实际安装路径修改，其他路径如有不同，也需要修改（PS：记得加可执行权限）
4. 文件 unoconvert 为服务运行文件，用来调用unoserver服务，放在`/usr/bin`目录下，填入系统配置中，文件中的路径、IP、端口根据实际情况修改（PS：记得加可执行权限）