---
title: Add apt sources from AnduinOS
nav_order: 7030
has_children: true
parent: Howto
---




# Add apt sources from AnduinOS




## Subject

* [Discussions](#discussions)
* [Description](#description)
* [Environment](#environment)
* [Usage](#usage)
* [Howto](#howto)
* [Explore](#explore)




## Discussions

* [How to add apt sources from AnduinOS](https://github.com/Anduin2017/AnduinOS/discussions/354)




## Description

Referring to [AnduinOS-2/build.sh](https://github.com/AiursoftWeb/AnduinOS-2/blob/master/build.sh#L96-L115), I created a simple [script](https://github.com/samwhelp/demo-for-anduinos-discussion/blob/main/demo/apt/demo-add-apt-source-from-anduinos/demo-start/add-apt-source-from-anduinos.sh) that can be used to add apt-sources from AnduinOS([https://packages.anduinos.com](https://packages.anduinos.com)).


The script create two files

* /usr/share/keyrings/anduinos-archive-keyring.gpg
* /etc/apt/sources.list.d/anduinos.sources


The following is a brief introduction to the basic usage of this script. For more advanced usage examples, please refer to [README.md](https://github.com/samwhelp/demo-for-anduinos-discussion/tree/main/demo/apt/demo-add-apt-source-from-anduinos/demo-start).

Before using this script, please ensure you understand the associated actions and risks.

This is to prevent unforeseen circumstances from damaging your existing system.

I'm sharing this script purely for learning and reference purposes.




## Environment

* Ubuntu 26.04



## Usage

How to download [add-apt-source-from-anduinos.sh](https://github.com/samwhelp/demo-for-anduinos-discussion/blob/main/demo/apt/demo-add-apt-source-from-anduinos/demo-start/add-apt-source-from-anduinos.sh) and run [it](https://raw.githubusercontent.com/samwhelp/demo-for-anduinos-discussion/refs/heads/main/demo/apt/demo-add-apt-source-from-anduinos/demo-start/add-apt-source-from-anduinos.sh).




## Usage / basic

download script

``` sh
wget -c 'https://raw.githubusercontent.com/samwhelp/demo-for-anduinos-discussion/refs/heads/main/demo/apt/demo-add-apt-source-from-anduinos/demo-start/add-apt-source-from-anduinos.sh'
```

chmod

``` sh
chmod 755 add-apt-source-from-anduinos.sh
```

run it

``` sh
./add-apt-source-from-anduinos.sh
```

then run

``` sh
sudo apt-get update
```

run to search package

``` sh
apt-cache search anduinos
```

run to install [anduinos-wallpapers](https://github.com/AiursoftWeb/AnduinOS-Packages/tree/master/anduinos-wallpapers)

``` sh
sudo apt-get install anduinos-wallpapers
```

run

``` sh
dpkg -L anduinos-wallpapers
```

show

```
/.
/etc
/etc/dconf
/etc/dconf/db
/etc/dconf/db/anduinos.d
/etc/dconf/db/anduinos.d/20-wallpapers.conf
/usr
/usr/share
/usr/share/backgrounds
/usr/share/backgrounds/11-dark.jpg
/usr/share/backgrounds/11-light.jpg
/usr/share/backgrounds/Floating-objects-dark.png
/usr/share/backgrounds/Floating-objects-light.jpg
/usr/share/backgrounds/Fluent-building-light.png
/usr/share/backgrounds/Fluent-building-night.png
/usr/share/backgrounds/aos-dark.jpg
/usr/share/backgrounds/aos-light.jpg
/usr/share/backgrounds/new_bubbles-dark.jpg
/usr/share/backgrounds/new_bubbles-light.jpg
/usr/share/backgrounds/new_mountain-dark.png
/usr/share/backgrounds/new_mountain-light.png
/usr/share/gnome-background-properties
/usr/share/gnome-background-properties/fluent.xml
```




## Check

Viwe File: /etc/apt/sources.list.d/anduinos.sources

run

``` sh
cat /etc/apt/sources.list.d/anduinos.sources
```

show

```
Types: deb
URIs: https://packages.anduinos.com/artifacts/anduinos/
Suites: resolute-addon
Components: main
Architectures: amd64
Signed-By: /usr/share/keyrings/anduinos-archive-keyring.gpg
```




## Howto


### How to remove

just remove two files and run `sudo apt-get update`

``` sh
sudo rm -f /etc/apt/sources.list.d/anduinos.sources

sudo rm -f /usr/share/keyrings/anduinos-archive-keyring.gpg

sudo apt-get update

```




## How to convert Ubuntu to AnduinOS

My initial idea was to use this mechanism to convert Ubuntu to AnduinOS.

Theoretically, it's feasible.

You can also see the script in another [discussion thread](#discussioncomment-17380645), used to convert Ubuntu to AnduinOS.

However, I haven't actually tested it yet,

because I haven't created a new Ubuntu 26.04 environment for experimentation.

Currently, I only have anduinos-wallpapers installed for testing.

Those interested in exploring this can refer to the Script:[AnduinOS-2/mods/05-live-kernel-apps-installer/install.sh](https://github.com/AiursoftWeb/AnduinOS-2/blob/master/mods/05-live-kernel-apps-installer/install.sh#L24-L47) ,

which shows which Debian [Packages](https://wiki.debian.org/Packaging/BinaryPackage) and [MetaPackages](https://wiki.debian.org/metapackage) for AnduinOS are installed.

To further explore the contents of these packages, refer to the Project:[ AnduinOS-Packages](https://github.com/AiursoftWeb/AnduinOS-Packages).




## Explore








## Explore / 001

Alternatively, we can directly download the Debian Package to explore.

The following example uses `anduinos-wallpapers` to illustrate this.


## Download

run

``` sh
apt-get download anduinos-wallpapers
```

It will download a file named `anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb`.




## Info

run show

``` sh
dpkg -I anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb
```

show

```
 new Debian package, version 2.0.
 size 80061162 bytes: control archive=330 bytes.
     335 bytes,    11 lines      control
 Package: anduinos-wallpapers
 Version: 2.0.0~rc1-2+resolute
 Architecture: all
 Maintainer: AnduinOS Team <anduin@aiursoft.com>
 Installed-Size: 80799
 Depends: anduinos-dconf-runtime
 Provides: ubuntu-wallpapers
 Homepage: https://www.anduinos.com
 Section: admin
 Priority: optional
 Description: AnduinOS default wallpapers (Fluent Building)
```




## File List

run

``` sh
dpkg -c anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb
```

show

```
drwxrwxr-x root/root         0 1970-01-01 08:00 ./
drwxrwxr-x root/root         0 1970-01-01 08:00 ./etc/
drwxrwxr-x root/root         0 1970-01-01 08:00 ./etc/dconf/
drwxrwxr-x root/root         0 1970-01-01 08:00 ./etc/dconf/db/
drwxrwxr-x root/root         0 1970-01-01 08:00 ./etc/dconf/db/anduinos.d/
-rw-r--r-- root/root       196 1970-01-01 08:00 ./etc/dconf/db/anduinos.d/20-wallpapers.conf
drwxrwxr-x root/root         0 1970-01-01 08:00 ./usr/
drwxrwxr-x root/root         0 1970-01-01 08:00 ./usr/share/
drwxrwxr-x root/root         0 1970-01-01 08:00 ./usr/share/backgrounds/
-rw-r--r-- root/root   6344067 1970-01-01 08:00 ./usr/share/backgrounds/11-dark.jpg
-rw-r--r-- root/root   7355833 1970-01-01 08:00 ./usr/share/backgrounds/11-light.jpg
-rw-r--r-- root/root   8670631 1970-01-01 08:00 ./usr/share/backgrounds/Floating-objects-dark.png
-rw-r--r-- root/root   5038780 1970-01-01 08:00 ./usr/share/backgrounds/Floating-objects-light.jpg
-rw-r--r-- root/root   1058198 1970-01-01 08:00 ./usr/share/backgrounds/Fluent-building-light.png
-rw-r--r-- root/root    538740 1970-01-01 08:00 ./usr/share/backgrounds/Fluent-building-night.png
-rw-r--r-- root/root   1339681 1970-01-01 08:00 ./usr/share/backgrounds/aos-dark.jpg
-rw-r--r-- root/root   1382007 1970-01-01 08:00 ./usr/share/backgrounds/aos-light.jpg
-rw-r--r-- root/root   5045941 1970-01-01 08:00 ./usr/share/backgrounds/new_bubbles-dark.jpg
-rw-r--r-- root/root   5677233 1970-01-01 08:00 ./usr/share/backgrounds/new_bubbles-light.jpg
-rw-r--r-- root/root  19052835 1970-01-01 08:00 ./usr/share/backgrounds/new_mountain-dark.png
-rw-r--r-- root/root  21215967 1970-01-01 08:00 ./usr/share/backgrounds/new_mountain-light.png
drwxrwxr-x root/root         0 1970-01-01 08:00 ./usr/share/gnome-background-properties/
-rw-r--r-- root/root      1732 1970-01-01 08:00 ./usr/share/gnome-background-properties/fluent.xml
```




## Manpage

* [man dpkg](https://manpages.ubuntu.com/manpages/resolute/man1/dpkg.1.html)








## Explore / explain 002

We can also extract the Debian Package that we just downloaded to explore.




## Extract deb control file

run

``` sh
dpkg -e anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb
```

A folder named `DEBIAN` will be created.

then run

``` sh
tree DEBIAN
```

show

```
DEBIAN/
└── control

1 directory, 1 file
```

run to view `DEBIAN/control` content.

``` sh
cat DEBIAN/control
```

show

```
Package: anduinos-wallpapers
Version: 2.0.0~rc1-2+resolute
Architecture: all
Maintainer: AnduinOS Team <anduin@aiursoft.com>
Installed-Size: 80799
Depends: anduinos-dconf-runtime
Provides: ubuntu-wallpapers
Homepage: https://www.anduinos.com
Section: admin
Priority: optional
Description: AnduinOS default wallpapers (Fluent Building)
```




## Extract deb content

run

``` sh
dpkg -x anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb anduinos-wallpapers
```

A folder named `anduinos-wallpapers` will be created.

run

``` sh
tree anduinos-wallpapers
```

show

```
anduinos-wallpapers
├── etc
│     └── dconf
│         └── db
│             └── anduinos.d
│                 └── 20-wallpapers.conf
└── usr
    └── share
        ├── backgrounds
        │     ├── 11-dark.jpg
        │     ├── 11-light.jpg
        │     ├── aos-dark.jpg
        │     ├── aos-light.jpg
        │     ├── Floating-objects-dark.png
        │     ├── Floating-objects-light.jpg
        │     ├── Fluent-building-light.png
        │     ├── Fluent-building-night.png
        │     ├── new_bubbles-dark.jpg
        │     ├── new_bubbles-light.jpg
        │     ├── new_mountain-dark.png
        │     └── new_mountain-light.png
        └── gnome-background-properties
            └── fluent.xml

9 directories, 14 files
```




## Apkg Source

We can also see [AnduinOS-Packages/anduinos-wallpapers](https://github.com/AiursoftWeb/AnduinOS-Packages/tree/master/anduinos-wallpapers) to understand the connections between them.




## Manpage

* [man dpkg](https://manpages.ubuntu.com/manpages/resolute/man1/dpkg.1.html)
* [man deb-control](https://manpages.ubuntu.com/manpages/resolute/man5/deb-control.5.html)




## Link

* [Apkg](https://github.com/AiursoftWeb/Apkg)







## Explore / explain 003

As [mentioned earlier](#discussion-10289816), `AnduinOS apt source` was added.

Then, execute `sudo apt-get update` or `sudo apt update`.




## Info

> run

``` sh
apt-cache show anduinos-wallpapers
```

show

```
Package: anduinos-wallpapers
Architecture: all
Version: 2.0.0~rc1-2+resolute
Priority: optional
Section: admin
Origin: ApkgDebPackage
Maintainer: AnduinOS Team <anduin@aiursoft.com>
Depends: anduinos-dconf-runtime
Provides: ubuntu-wallpapers
Homepage: https://www.anduinos.com
Installed-Size: 80799
Filename: pool/resolute-addon/main/a/anduinos-wallpapers/anduinos-wallpapers_2.0.0~rc1-2+resolute_all.deb
Size: 80061162
MD5sum: 9b5fe6c7facb56b911c35b29b141bf5a
SHA1: d0b57ec48187487f10bc966b26e340be005c4490
SHA256: 6a39ae6d3f0c5bc8dcf513922f6f3d9567a1333703177fcaeda7eac9fd4108a6
SHA512: f3ebc620270267303bd90270a9db847c685593b9a3d601333efdb9daf9bc98c4c2aa5d36821461ff24b0a589e1adbd6feb56f8578149610936954d89d4f70ce6
Description: AnduinOS default wallpapers (Fluent Building)
Description-md5:
```

> run

``` sh
apt show anduinos-wallpapers
```

> or run

``` sh
apt show anduinos-wallpapers -a
```

show

```
Package: anduinos-wallpapers
Version: 2.0.0~rc1-2+resolute
Priority: optional
Section: admin
Origin: ApkgDebPackage
Maintainer: AnduinOS Team <anduin@aiursoft.com>
Installed-Size: 82.7 MB
Provides: ubuntu-wallpapers
Depends: anduinos-dconf-runtime
Homepage: https://www.anduinos.com
Download-Size: 80.1 MB
APT-Manual-Installed: yes
APT-Sources: https://packages.anduinos.com/artifacts/anduinos resolute-addo>
Description: AnduinOS default wallpapers (Fluent Building)
```




## Install

> run

``` sh
sudo apt-get install anduinos-wallpapers
```

> or run

``` sh
sudo apt install anduinos-wallpapers
```




## Installed File List

After successfully installing the package: anduinos-wallpapers,

then run

``` sh
dpkg -L anduinos-wallpapers
```

show

```
/.
/etc
/etc/dconf
/etc/dconf/db
/etc/dconf/db/anduinos.d
/etc/dconf/db/anduinos.d/20-wallpapers.conf
/usr
/usr/share
/usr/share/backgrounds
/usr/share/backgrounds/11-dark.jpg
/usr/share/backgrounds/11-light.jpg
/usr/share/backgrounds/Floating-objects-dark.png
/usr/share/backgrounds/Floating-objects-light.jpg
/usr/share/backgrounds/Fluent-building-light.png
/usr/share/backgrounds/Fluent-building-night.png
/usr/share/backgrounds/aos-dark.jpg
/usr/share/backgrounds/aos-light.jpg
/usr/share/backgrounds/new_bubbles-dark.jpg
/usr/share/backgrounds/new_bubbles-light.jpg
/usr/share/backgrounds/new_mountain-dark.png
/usr/share/backgrounds/new_mountain-light.png
/usr/share/gnome-background-properties
/usr/share/gnome-background-properties/fluent.xml
```




## Manpage

* [man apt](https://manpages.ubuntu.com/manpages/resolute/man8/apt.8.html)
* [man apt-get](https://manpages.ubuntu.com/manpages/resolute/man8/apt-get.8.html)
* [man apt-cache](https://manpages.ubuntu.com/manpages/resolute/man8/apt-cache.8.html)
