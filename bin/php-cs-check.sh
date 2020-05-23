#!/usr/bin/env bash

# Checks code style via PHP CS Fixer in changed files only
# TODO Turn off imports order check as it differs in PHP CS Fixer and PhpStorm when a function is imported
echo "Changed php files: ${CHANGED_PHP_FILES}"
IFS='
'
if ! echo "${CHANGED_PHP_FILES}" | grep -qE "^(\\.php_cs(\\.dist)?|composer\\.lock)$"; then
  EXTRA_ARGS=$(printf -- '--path-mode=intersection\n--\n%s' "${CHANGED_PHP_FILES}");
else
  EXTRA_ARGS='';
fi
vendor/bin/php-cs-fixer fix \
                            --config=.php_cs.dist \
                            --ansi \
                            --dry-run \
                            --stop-on-violation \
                            --using-cache=no \
                            --diff ${EXTRA_ARGS}
