# Laraavel CI/CD Pipelines for GitHub Actions


# Workflow: no-plans-to-merge

Meant to add a comment "No plans to merge" on PRs that are closed without merging.

- github context object
- actions/github-script@v8
- toJson Method
- github.event.pull_request.merged == false

# Workflow: laravel-pint

Clean code styles when pushing up to main branch.

sometimes there is nothing to commit, so return success even if git commit fails.
`git commit -m "Laravel Pint" || exit 0`

# Workflow: tests

- install dependencies
- set up env 

make sure .env.example has the following variables set, as they are used as defaults in workflows:
```
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
If you have issues with "Vite manifest not found", enable the following
in the `tests/TestCase.php:setup()` method
`$this->withoutVite();`

see for workflow references: https://github.com/laravel/framework/tree/12.x/.github/workflows
