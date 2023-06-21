# Convivial profile CXP

This is a Drupal installation profile that encapsulates our starting site configuration and basic scaffolding
like settings.php and Lando tooling.

## Structure

* `convivial profile`
    * **Drupal installation profile. Holds config, default content, scaffolding files like settings.php and Lando tooling.**
    * All changes here will propagate to active projects.
* `convivial-recommended`
    * **Very basic file structure that requires `convivial profile` in composer. Used as a starting point for new projects.**
    * "Use it and forget it."
* `[new-project]`
    * **New git repo based on `convivial-recommended`. Holds project specific things. Requires `convivial profile` in composer.**
    * New project code is hosted on GitHub and GitHub Actions replicate it to Pantheon.
    * `composer update` fetches latest changes form `convivial profile`.

## Starting a new site - overview

* Decide on new machine name. Make sure it's available on Pantheon.
* `Use this template` on https://github.com/morpht/convivial-recommended
    * Template provides basic file structure and pulls in the `convivial profile`.
    * Rename all mentions of `convivial-recommended` to new project name.

This profile is meant to be used in conjunction with `convivial-recommended` project template. To start a new project, you should:

* Create a new github repo from convivial-recommended as a template.
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

To update configuration, one needs to manually copy new/updated configuration files to convivial/config/install folder and remove uuid and _core: default_hash items there.

[How to write an installation profile](https://www.drupal.org/docs/distributions/creating-distributions/how-to-write-a-drupal-installation-profile)
ffcdc9c0b44d0b76f5c14075081838ef7afe6b85f9e0672a6134580777c0519b
0b8579d3d41d9bbba0d7b7d019294b864067333cdf259827f32a9e38c79df803
79fc84df178c6414dfc763220d02706fbdc02b162ab5605d5d48451b8b83cc42
dfebe2a3a5b3c0a9668306ef79878ee0c77701029d8df62a5a3d27baa3d939b8
0fc4201fba29a8d4b5607e7ad833107cc8779fc9c0af0819e26de2ecff8ef391
8300c7d73ad7638f9af2104b01a1835efb00eb50c5464205633eee3a489c6a96
84a9a0a24305c26f30c666f2f83edb41287d39ade9c5d952424070aa6f133578
