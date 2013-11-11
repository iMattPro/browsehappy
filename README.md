# ![Browse Happy](http://mattfriedman.me/forum/images/ie6nomore.png "Browse Happy") Browse Happy for phpBB 3.1

An extension for phpBB 3.1 that displays an Outdated Browser Banner on your forum's index page, to encourage users of Internet Explorer 6/7/8 to upgrade to a modern browser. This banner is visible only to IE 6/7/8 users.

## STATUS
* To-do: Template event needed in better location on index_body.html

## Requirements
* phpBB 3.1-dev or higher
* PHP 5.3.3 or higher

## Installation
## Installation
You can install this on the latest copy of the develop branch ([phpBB 3.1-dev](https://github.com/phpbb/phpbb3)) by following the steps below:

**Manual:**

1. Copy the entire contents of this repo to to `phpBB/ext/vse/browsehappy/`
2. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
3. Click `Enable`.

**Git CLI:**

1. From the board root run the following git command:
`git clone https://github.com/VSEphpbb/browsehappy.git phpBB/ext/vse/browsehappy`
2. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
3. Click `Enable`.

Note: This extension is in development. Installation is only recommended for testing purposes and is not supported on live boards. This extension will be officially released following phpBB 3.1.0.

## Uninstallation
Navigate in the ACP to `Customise -> Extension Management -> Extensions` and click `Disable`.

To permanently uninstall, click `Delete Data` and then you can safely delete the `/ext/vse/browsehappy` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2013 - Matt Friedman (VSE)
