# This file has settings for the Make of this project.
# Targets must exist in the bin/make-file/targets/ directory.

.SILENT:
CURRENT_DIR := $(shell pwd)

ifneq ($(wildcard vendor/gpupo/common-sdk/bin/make-file/targets/*),)
	#CommonSdk
	include vendor/gpupo/common-sdk/bin/make-file/variables.mk
	include vendor/gpupo/common-sdk/bin/make-file/define.mk
	include vendor/gpupo/common-sdk/bin/make-file/help.mk

	include vendor/gpupo/common-sdk/bin/make-file/functions/*
	include vendor/gpupo/common-sdk/bin/make-file/targets/*
endif


## Install vendor
install:
	COMPOSER_MEMORY_LIMIT=9G composer install --prefer-dist --no-scripts

## Install vendor
install@force:
	test -f composer.lock && rm -f composer.lock
	COMPOSER_MEMORY_LIMIT=9G composer install --prefer-dist --no-scripts --ignore-platform-req true

## Include custom Targets:
# include bin/make-file/variables.mk
# include bin/make-file/define.mk
#
# include bin/make-file/functions/*.mk
# include bin/make-file/targets/*.mk
