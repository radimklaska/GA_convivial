# Convivial profile CXP

This is a Drupal installation profile that encapsulates our starting site configuration and basic scaffolding
like settings.php and Lando tooling.

## Structure

* `convivial-profile`
    * **Drupal installation profile. Holds config, default content, scaffolding files like settings.php and Lando tooling.**
    * All changes here will propagate to active projects.
* `convivial-template`
    * **Very basic file structure that requires `convivial-profile` in composer. Used as a starting point for new projects.**
    * "Use it and forget it."
* `[new-project]`
    * **New git repo based on `convivial-template`. Holds project specific things. Requires `convivial-profile` in composer.**
    * New project code is hosted on GitHub and GitHub Actions replicate it to Pantheon.
    * `composer update` fetches latest changes form `convivial-profile`.

## Starting a new site - overview

* Decide on new machine name. Make sure it's available on Pantheon.
* `Use this template` on https://github.com/morpht/convivial-template
    * Template provides basic file structure and pull s in the `convivial-profile`.
    * Rename all mentions of `convivial-template` to new project name.

This profile is meant to be used in conjunction with `convivial-template` project template. To start a new project, you should:

* Create a new github repo from convivial-template as a template.
* Checkout new repo locally and edit .lando.yml (project name, local url).
* Run `lando composer install`
* Install site locally with Convivial installation profile.
* Create Pantheon Drupal 9 site from link here https://pantheon.io/docs/drupal-9.
* Edit drush/sites/pantheon/{project}.site.yml to add there Pantheon site hash instead of %hash%
* Edit repository secrets at github to add there Pantheon git url.
* Upload database from local to pantheon.
* Force push your repository to pantheon git.
* After first push, dev site at Pantheon should be functional.

## Starting a new site - Technical details




## Updating

To add content to default content provided by the profile, you should export it by drush `drush dcer node 123 --folder=profiles/contrib/convivial-profile/modules/custom/convivial_content/content/`

[Detailed guide to using Default content](https://www.drupal.org/docs/8/modules/default-content-for-d8/overview)

To update configuration, one needs to manually copy new/updated configuration files to convivial-profile/config/install folder and remove uuid and _core: default_hash items there.

[How to write an installation profile](https://www.drupal.org/docs/distributions/creating-distributions/how-to-write-a-drupal-installation-profile)
94178ec9972993f808943c23359074648b9d591d4fb44e6a5d547343e418c1b8
