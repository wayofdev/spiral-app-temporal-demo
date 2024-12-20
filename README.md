<p align="center">
    <br>
    <a href="https://wayof.dev" target="_blank">
        <picture>
            <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/wayofdev/.github/master/assets/logo.gh-dark-mode-only.png">
            <img width="400" src="https://raw.githubusercontent.com/wayofdev/.github/master/assets/logo.gh-light-mode-only.png" alt="WayOfDev Logo">
        </picture>
    </a>
    <br>
</p>

<p align="center">
    <strong>Build</strong><br>
    <a href="https://actions-badge.atrox.dev/wayofdev/spiral-app-temporal-demo/goto" target="_blank"><img alt="Build Status" src="https://img.shields.io/endpoint.svg?url=https%3A%2F%2Factions-badge.atrox.dev%2Fwayofdev%2Fspiral-app-temporal-demo%2Fbadge&style=flat-square&label=github%20actions"/></a>
    <a href="https://github.com/wayofdev/spiral-app-temporal-demo/actions/workflows/deploy-staging.yml?query=workflow%3ADeploy" target="_blank"><img alt="Deploy to Staging Status" src="https://img.shields.io/github/actions/workflow/status/wayofdev/spiral-app-temporal-demo/deploy-staging.yml?branch=develop&style=flat-square&label=deploy%20to%20staging&logo=github"/></a>
    <a href="https://github.com/wayofdev/spiral-app-temporal-demo/actions/workflows/deploy-release.yml?query=workflow%3ADeploy" target="_blank"><img alt="Deploy to Production Status" src="https://img.shields.io/github/actions/workflow/status/wayofdev/spiral-app-temporal-demo/deploy-release.yml?style=flat-square&label=deploy%20to%20prod&logo=github"/></a>
</p>
<p align="center">
    <strong>Project</strong><br>
    <a href="https://github.com/wayofdev/spiral-app-temporal-demo" target="_blank"><img src="https://img.shields.io/github/v/release/wayofdev/spiral-app-temporal-demo?style=flat-square" alt="Latest Stable Version"></a>
    <a href="https://github.com/wayofdev/spiral-app-temporal-demo" target="_blank"><img alt="Commits since latest release" src="https://img.shields.io/github/commits-since/wayofdev/spiral-app-temporal-demo/latest?style=flat-square"></a>
    <a href="https://github.com/wayofdev/spiral-app-temporal-demo" target="_blank"><img alt="PHP Version Require" src="https://poser.pugx.org/wayofdev/laravel-package-tpl/require/php?style=flat-square"></a>
</p>
<p align="center">
    <strong>Quality</strong><br>
    <a href="https://app.codecov.io/gh/wayofdev/spiral-app-temporal-demo" target="_blank"><img alt="Codecov" src="https://img.shields.io/codecov/c/github/wayofdev/spiral-app-temporal-demo?style=flat-square&logo=codecov"></a>
    <a href="https://dashboard.stryker-mutator.io/reports/github.com/wayofdev/spiral-app-temporal-demo/develop" target="_blank"><img alt="Mutation testing badge" src="https://img.shields.io/endpoint?style=flat-square&label=mutation%20score&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fwayofdev%2Fspiral-app-temporal-demo%2Fmaster"></a>
    <a href=""><img src="https://img.shields.io/badge/phpstan%20level-8%20of%209-brightgreen?style=flat-square" alt="PHP Stan Level 8 of 9"></a>
</p>
<p align="center">
    <strong>Community</strong><br>
    <a href="https://discord.gg/CE3TcCC5vr" target="_blank"><img alt="Discord" src="https://img.shields.io/discord/1228506758562058391?style=flat-square&logo=discord&labelColor=7289d9&logoColor=white&color=39456d"></a>
    <a href="https://x.com/intent/follow?screen_name=wayofdev" target="_blank"><img alt="Follow on Twitter (X)" src="https://img.shields.io/badge/-Follow-black?style=flat-square&logo=X"></a>
</p>
<br>

# Spiral Demo with Temporal Workflows.

This project demonstrates the implementation of web application transfers using [Temporal.io](https://temporal.io) with [Spiral Framework](https://spiral.dev).

It showcases how to handle complex, distributed workflows in a reliable and maintainable way.

## 📄 About

**Imagine moving an entire website between servers - files, databases, domains - with zero downtime and automatic failure recovery.**

This is exactly what this project achieves through durable [Workflows](https://docs.temporal.io/workflows?basic-workflow-definition=php).

<br>

🙏 If you find this repository useful, consider giving it a ⭐️. Thank you!

<br>

### → The Challenge

This project uses Website Transfer from `Server A` to `Server B` as an example scenario because it shows many common distributed system challenges:

- Network issues during file transfer
- Database backup corruption
- DNS propagation delays
- Server configuration problems
- Timeout issues during large transfers

Traditional approaches require complex error handling, manual recovery procedures, and often lead to extended downtimes. This project offers a robust solution.

### → The Solution

Using Temporal.io, this app demonstrates reliable, self-healing website transfer system that:

- Automatically retries failed operations
- Resumes from the last successful step after crashes
- Provides real-time transfer status visibility
- Handles long-running operations gracefully
- Maintains consistency during the entire process

For example, here's how a website transfer is initiated:

```bash
$ make up
$ make ssh
$ php app.php website:transfer
```

You can monitor the workflow execution through the Temporal UI at:

```bash
https://temporal.spiral-app-temporal-demo.docker
```

The system then automatically orchestrates the entire process:

```mermaid
graph TD
    A[Start Transfer] --> B[Backup Files]
    B --> C[Release Domain]
    C --> D[Backup Database]
    D --> E[Transfer Backups]
    E --> F[Allocate Space]
    F --> G[Restore Database]
    G --> H[Restore Files]
    H --> I[Attach Domain]
    I --> J[Complete]
```

### → Use Cases

This example can be adapted for various scenarios:

- Website migrations between hosting providers
- Server infrastructure updates
- Disaster recovery procedures
- Development environment replication

The architecture provided serves as a template for implementing other complex, distributed workflows in your applications.

<br>

## 🚀 Features

This starter template includes several added, changed, and removed features:

### → Framework Modifications

* **Added:**
  * To be added...
* **Changed:**
  * To be added...
* **Removed:**
  * To be added...

### → Development Tools

* **Added:**
  * Style checker package for custom rule-sets to php-cs-fixer — [wayofdev/php-cs-fixer-config](https://github.com/wayofdev/php-cs-fixer-config)
  * [Phive](https://github.com/phar-io/phive) support for managing PHP tools
    * [ergebnis/composer-normalize](https://github.com/ergebnis/composer-normalize) composer plugin for normalizing composer.json file
    * [maglnet/ComposerRequireChecker](https://github.com/maglnet/ComposerRequireChecker) to check whether a specific composer package uses imported symbols that aren't part of its direct composer dependencies
  * Application dockerization using docker-compose and Makefile — use `make help` to view available commands
    * [docker-php-dev](https://github.com/wayofdev/docker-php-dev) as PHP development environment with XDebug support out of the box

### → Testing

* **Added:**
  * Configured [PHPUnit](https://phpunit.de/index.html) for unit testing.
  * Integrated [Pest PHP](https://pestphp.com) for elegant console support and architecture testing.
  * [Infection](https://github.com/infection/infection) for mutation testing to ensure quality.
  * Mutation test reports are uploaded [Stryker Mutator Dashboard](https://dashboard.stryker-mutator.io).

### → Static Analysis

* **Added:**
  * Static analysis tool — [PHPStan](https://phpstan.org) and it's extensions:
    * [phpstan/extension-installer](https://github.com/phpstan/extension-installer) — automatic installation of PHPStan extensions
    * [phpstan/phpstan-deprecation-rules](https://github.com/phpstan/phpstan-deprecation-rules) — rules for detecting usage of deprecated classes, methods, properties, constants and traits.
    * [larastan/larastan](https://github.com/larastan/larastan) for Laravel-specific static analysis.
  * [Psalm](https://github.com/vimeo/psalm) static analysis tool and it's extensions:
    * [psalm/plugin-laravel](https://github.com/psalm/psalm-plugin-laravel) — Psalm plugin for Laravel
    * [psalm/plugin-phpunit](https://github.com/psalm/psalm-plugin-phpunit) — Psalm plugin for PHPUnit
  * [PHP Rector](https://github.com/rectorphp/rector) for automated code upgrades and refactoring, maintaining modern code standards.

### → Continuous Integration

* **Added:**
  * GitHub action workflows for:
    * Continuous integration which includes coding standards checks, unit testing and static analysis
    * Automatic pull-request labeling
  * Git pre-commit hooks using [pre-commit](https://pre-commit.com) package

### → Deployments

* **Added:**
  * [Deployer](https://deployer.org) for automatic deployments to staging and production servers with support of [GitHub Environments](https://docs.github.com/en/actions/deployment/targeting-different-environments/using-environments-for-deployment)
  * For more information see [Deployments](#-requirements) section

### → Services

* **Added:**
  * [Mailpit](https://github.com/axllent/mailpit) service to simplify email testing in development. Mailpit is an email testing tool that provides a web interface for viewing and managing test emails sent by the application.
  * [MinIO](https://min.io) service for object storage, compatible with the Amazon S3 API. This enables the application to store and retrieve files in a development environment.
  * [Temporal](https://temporal.io/) service is included by default for managing distributed workflows. The configuration for Temporal is located in the separate [docker-compose.temporal.yaml](./docker-compose.temporal.yaml) file, allowing easier integration with the main application.

<br>

## 🚩 Requirements

To use this repository, you need to meet the following requirements:

* **Operating System**: macOS Monterey+, Linux, or Windows with WSL2.
* **Docker**: Version 26.0.0 or newer. Installation guides:
  * [How To Install and Use Docker on Ubuntu 22.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-22-04)
  * [How To Install Docker Desktop on Mac](https://docs.docker.com/desktop/install/mac-install/)
* **Cloned, configured and running** [docker-shared-services](https://github.com/wayofdev/docker-shared-services) to support system-wide DNS, routing, and TLS support via Traefik.

<br>

## 💿 Installation

> [!Note]
> You should configure, set up, and run the [docker-shared-services](https://github.com/wayofdev/docker-shared-services) repository to ensure system-wide TLS and DNS support.

### → Docker Shared Services

Check full instructions in [docker-shared-services](https://github.com/wayofdev/docker-shared-services) repository.

1. **Create shared project directory:**

   ```bash
   mkdir -p ~/projects/infra && cd ~/projects/infra
   ```

2. **Clone `docker-shared-services` repository:**

    ```bash
    git clone \
    git@github.com:wayofdev/docker-shared-services.git \
    ~/projects/infra/docker-shared-services && \
    cd ~/projects/infra/docker-shared-services
   ```

3. **Create `.env` file:**

    ```bash
    make env
    ```

4. **Install root certificate** and generate default project certs:

    ```bash
    make cert-install
    ```

5. **Run shared services:**

    ```bash
    make up
    ```

### → Spiral Starter Template

1. **Clone** repository:

   After forking or creating generating repository from template, you can clone it to your local machine. In this example we will use `spiral-app-temporal-demo` repository as starting point.

   ```bash
   git clone \
     git@github.com:wayofdev/spiral-app-temporal-demo.git \
     ~/projects/spiral-app-temporal-demo && \
   cd ~/projects/spiral-app-temporal-demo
   ```

2. **Generate** `.env` file

   Generate `.env` file from `.env.example` file using `Makefile` command:

   ```bash
   $ make env \
       SHARED_SERVICES_NAMESPACE=ss \
       COMPOSE_PROJECT_NAME=spiral-app-temporal-demo
   ```

   **Change** generated `.env` file to match your needs, if needed.

   (Optional): to re-generate `.env` file, add `FORCE=true` to the end of command:

   ```bash
   $ make env \
       SHARED_SERVICES_NAMESPACE=ss \
       COMPOSE_PROJECT_NAME=spiral-app-temporal-demo \
       FORCE=true
   ```

3. **Build**, install and run. This will also generate Laravel app key:

   ```bash
   $ make

   # or run commands separately
   $ make hooks
   $ make install
   $ make key
   $ make prepare
   $ make up
   ```

4. **Open** your browser and navigate to `https://api.spiral-app-temporal-demo.docker` to see Laravel welcome page.

<br>

## 🧰 Project Architecture

The project architecture of `wayofdev/spiral-app-temporal-demo` follows a structured approach with distinct layers:

* **Domain:** Contains core business logic and entities.
* **Bridge:** Connects the domain layer with external systems or services.
* **Infrastructure:** Handles interactions with external systems, such as databases, APIs, or file systems.
* **Support:** Provides general-purpose helper classes that assist various parts of the application.
* **DatabaseSeeders:** Handles database seeding logic.
* **DatabaseFactories:** Manages database factory definitions.
* **Tests:** Contains test cases for various layers of the application.

Each layer has defined dependencies, ensuring a clear separation of concerns and facilitating maintainability and scalability.

For more information check [deptrac.yaml](https://github.com/wayofdev/spiral-app-temporal-demo/blob/develop/app/deptrac.yaml) located in repository `app` folder.

<br>

## 🪄 Template

This project was generated from the [spiral/app](https://github.com/spiral/app) repository using the command: `composer create-project spiral/app spiral-app-temporal-demo` with the following selected options:

<details>
  <summary>View Setup Options</summary>

  ```bash
  Which application preset do you want to install?
  > [1] Web

  Create a default application structure and demo data?
  > [1] Yes

  Would you like to use SAPI?
  > [1] Yes

  Do you need Cycle ORM?
  > [1] Yes

  Which collections do you want to use with Cycle ORM?
  > [2] Laravel Collections

  Which validator component do you want to use?
  > [3] Laravel Validator

  Do you want to use Queue component?
  > [1] Yes

  Do you want to use Cache component?
  > [1] Yes

  Do you want to use Mailer component?
  > [1] Yes

  Do you want to use Storage component?
  > [1] Yes

  Which template engine do you want to use?
  > [3] Plain PHP

  Do you need Data Grid?
  > [1] Yes

  Do you want to use the Event Dispatcher?
  > [1] Yes

  Do you need a cron jobs scheduler?
  > [1] Yes

  Do you need Translator?
  > [0] No

  Do you need the Temporal?
  > [1] Yes

  Do you need the RoadRunner Metrics?
  > [1] Yes

  Do you need the Sentry?
  > [1] Yes
  ```

</details>

<br>
