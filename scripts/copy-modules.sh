#!/bin/bash

BASE_DIR="web/modules/contrib"
SITE_DIRS=("web/sites/de/modules/contrib" "web/sites/fr/modules/contrib" "web/sites/ar/modules/contrib")

# Loop through each site directory
for SITE_DIR in "${SITE_DIRS[@]}"; do
    # Ensure the site-specific directory exists
    mkdir -p "$SITE_DIR"

    # Loop through each module in the contrib directory
    for MODULE_PATH in "$BASE_DIR"/*; do
        if [ -d "$MODULE_PATH" ]; then
            MODULE_NAME=$(basename "$MODULE_PATH")
            TARGET_PATH="$SITE_DIR/$MODULE_NAME"

            # Copy only if the module doesn't already exist in the site-specific directory
            if [ ! -d "$TARGET_PATH" ]; then
                cp -r "$MODULE_PATH" "$TARGET_PATH"
                echo "Copied new module: $MODULE_NAME to $SITE_DIR"
            else
                echo "Module: $MODULE_NAME already exists in $SITE_DIR, skipping."
            fi
        fi
    done
done
