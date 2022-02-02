![Git Updater Free](./assets/GitHub_Updater_logo_small.png)

# Wordpress Git Updater Free (plugin, theme, language)

![downloads](https://img.shields.io/github/downloads/modaresimr/git-updater-free/total) ![downloads@latest](https://img.shields.io/github/downloads/modaresimr/git-updater-free/latest/total)

![WordPress Tests](https://github.com/modaresimr/git-updater-free/workflows/WordPress%20Tests/badge.svg)

* Contributors: [Ali Modaresi](https://github.com/modaresimr), [Andy Fragen](https://github.com/afragen), [Gary Jones](https://github.com/GaryJones), [Seth Carstens](https://github.com/sethcarstens), [Mikael Lindqvist](https://github.com/limikael), [contributors](https://github.com/modaresimr/git-updater-free/graphs/contributors)
* Tags: plugin, theme, update, updater, github, bitbucket, gitlab, remote install
* Requires at least: 5.2
* Requires PHP: 5.6
* Tested up to: trunk
* Stable tag: [master](https://github.com/modaresimr/git-updater-free/releases/latest)
* License: GPLv2 or later
* License URI: <https://www.gnu.org/licenses/gpl-2.0.html>

A simple plugin to enable automatic updates to your GitHub, Bitbucket, GitLab, or Gitea hosted WordPress plugins, themes, and language packs. It also allows for the remote installation of plugins or themes.

I would like to thanks [Andy Fragen](https://github.com/afragen) because of his great plugin. However, he changed his repository license. Therefore, i used his latest GNU code.

[Comprehensive information regarding GitHub Updater is available on the wiki.](https://github.com/modaresimr/git-updater-free/wiki)

[Install the latest version here.](https://github.com/modaresimr/git-updater-free/releases/latest)

## Description

This plugin was designed to simply update any GitHub hosted WordPress plugin or theme. Your plugin or theme **must** contain a header in the style.css header or in the plugin's header denoting the location on GitHub. The format is as follows.

    GitHub Plugin URI: modaresimr/git-updater-free
    GitHub Plugin URI: https://github.com/modaresimr/git-updater-free

or

    GitHub Theme URI: modaresimr/test-child
    GitHub Theme URI: https://github.com/modaresimr/test-child

...where the above URI leads to the __owner/repository__ of your theme or plugin. The URI may be in the format `https://github.com/<owner>/<repo>` or the short format `<owner>/<repo>`. You do not need both. Only one Plugin or Theme URI is required. You **should not** include any extensions like `.git`.

