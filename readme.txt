# GitHub Updater
Contributors: modaresimr, afragen, garyj, sethcarstens, limikael
Tags: plugin, theme, language pack, updater, remote install
Requires at least: 5.2
Requires PHP: 5.6
Tested up to: 5.7
Stable tag: master
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

## Description


This plugin was designed to simply update any GitHub hosted WordPress plugin or theme. Your plugin or theme **must** contain a header in the style.css header or in the plugin's header denoting the location on GitHub. The format is as follows.

    GitHub Plugin URI: modaresimr/git-updater-free
    GitHub Plugin URI: https://github.com/modaresimr/git-updater-free

or

    GitHub Theme URI: modaresimr/test-child
    GitHub Theme URI: https://github.com/modaresimr/test-child


...where the above URI leads to the __owner/repository__ of your theme or plugin. The URI may be in the format `https://github.com/<owner>/<repo>` or the short format `<owner>/<repo>`. You do not need both. Only one Plugin or Theme URI is required. You **must not** include any extensions like `.git`.

The following headers are available for use depending upon your hosting source.

### GitHub
* GitHub Plugin URI
* GitHub Theme URI
* GitHub Languages

### Bitbucket
* Bitbucket Plugin URI
* Bitbucket Theme URI
* Bitbucket Languages

### GitLab
* GitLab Plugin URI
* GitLab Theme URI
* GitLab Languages
* GitLab CI Job

### Gitea
* Gitea Plugin URI
* Gitea Theme URI
* Gitea Languages

### Gist
* Gist Plugin URI
* Gist Theme URI
* Gist Languages

