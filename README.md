Prune Logs
===========

Prune Logs deletes logs after a configurable timespan in ACP. Switch it off by setting the config value to zero.

[![Build Status](https://travis-ci.org/ForumHulp/Prune_Logs.svg?branch=master)](https://travis-ci.org/ForumHulp/Prune_Logs)

## Requirements
* phpBB 3.1-dev or higher
* PHP 5.3 or higher

## Installation
You can install this on the latest copy of the develop branch ([phpBB 3.1-dev](https://github.com/phpbb/phpbb3)) by doing the following:

1. Copy the entire contents of this repo to to `FORUM_DIRECTORY/ext/forumhulp/prunelogs/`
2. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
3. Click Cron status => `Enable`.

## Uninstallation
Navigate in the ACP to `Customise -> Extension Management -> Extensions` and click Prune Logs => `Disable`.

To permanently uninstall, click `Delete Data` and then you can safely delete the `/ext/forumhulp/prunelogs/` folder.

We feel sorry as our answers on phpbb sites are removed, so use github or our forum for answers.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 - John Peskens (ForumHulp.com)