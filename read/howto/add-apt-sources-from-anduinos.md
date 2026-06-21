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




## convert Ubuntu to AnduinOS

My initial idea was to use this mechanism to convert Ubuntu to AnduinOS.

Theoretically, it's feasible.

You can also see the script in another [discussion thread](#discussioncomment-17380645), used to convert Ubuntu to AnduinOS.

However, I haven't actually tested it yet,

because I haven't created a new Ubuntu 26.04 environment for experimentation.

Currently, I only have anduinos-wallpapers installed for testing.

Those interested in exploring this can refer to the Script:[AnduinOS-2/mods/05-live-kernel-apps-installer/install.sh](https://github.com/AiursoftWeb/AnduinOS-2/blob/master/mods/05-live-kernel-apps-installer/install.sh#L24-L47) ,

which shows which Debian [Packages](https://wiki.debian.org/Packaging/BinaryPackage) and [MetaPackages](https://wiki.debian.org/metapackage) for AnduinOS are installed.

To further explore the contents of these packages, refer to the Project:[ AnduinOS-Packages](https://github.com/AiursoftWeb/AnduinOS-Packages).
