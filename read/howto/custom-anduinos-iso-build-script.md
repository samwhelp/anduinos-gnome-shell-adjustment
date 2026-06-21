---
title: Custom AnduinOS-2 iso build script
nav_order: 7020
has_children: true
parent: Howto
---




# Custom AnduinOS-2 iso build script




## Subject

* [Discussions](#discussions)
* [Description](#description)




## Discussions

* [Custom AnduinOS-2 iso build script](https://github.com/Anduin2017/AnduinOS/discussions/352)




## Description

Based on the project [https://github.com/AiursoftWeb/AnduinOS-2](https://github.com/AiursoftWeb/AnduinOS-2),

Here I will share my thought process for making the revisions.

Since I haven't yet learned how to packaging and deploy `Debian Packages` using [apkg](https://github.com/AiursoftWeb/Apkg).

Therefore, for now, I will temporarily use the method I used in AnduinOS-1.




## Samples

After the modification, I generated two samples, `main-mykeybind` and `main-respin`.

| Branch | Introduction | More Info |
| ------ | ------------ | --------- |
| [main-mykeybind](https://github.com/samwhelp/AnduinOS-2/tree/main-mykeybind) | my keybind | [More Info ...](https://samwhelp.github.io/AnduinOS-2/read/branch/main-mykeybind.html) |
| [main-respin](https://github.com/samwhelp/AnduinOS-2/tree/main-respin) | my keybind and add more package and config (fzf, variety, fcitx5-chewing ...) | [More Info ...](https://samwhelp.github.io/AnduinOS-2/read/branch/main-respin.html) |




> I will use `main-respin` as an example to explain below.




## Rundown

| Rundown |
| ------- |
| [install_all_mods.txt](https://github.com/samwhelp/AnduinOS-2/blob/main-respin/mods/install_all_mods.txt) |
| [install_all_mods.sh](https://github.com/samwhelp/AnduinOS-2/blob/main-respin/mods/install_all_mods.sh) |

I modified `mods/install_all_mods.sh`.

The original method was to execute the module based on its folder name.

The new approach uses `mods/install_all_mods.txt` to control which module are executed and in what order.




## Custom Modules

I have added the following new modules.

| Custom Modules | Introduction |
| -------------- | ------------ |
| [master-package-install](https://github.com/samwhelp/AnduinOS-2/tree/main-respin/mods/master-package-install) | for install extra packages |
| [master-file-install](https://github.com/samwhelp/AnduinOS-2/tree/main-respin/mods/master-file-install) | for install extra files |
| [base-dconf-db-update](https://github.com/samwhelp/AnduinOS-2/tree/main-respin/mods/base-dconf-db-update) |  |
| [base-gsettings-schema-compile](https://github.com/samwhelp/AnduinOS-2/tree/main-respin/mods/base-gsettings-schema-compile) |  |

For more details, please refer to the README.md file in each module.




## Summary

I have no intention of turning it into a distribution, so I haven't provided an ISO File after it's been generated.

The above sharing is merely to provide my modification ideas and a completed sample.

My intention is simply to provide a reference for those interested in customizing AnduinOS ISO File.

It might inspire new ideas and allow you to enjoy the fun of doing things yourself.

Perhaps it can generate an AnduinOS ISO File that suits your personal preferences.

Finally, I would like to thank @Anduin2017.

It seems he put a lot of effort into foundation about AnduinOS and shared his results.

With this foundation, we can more easily build an AnduinOS ISO File tailored to our individual needs.
