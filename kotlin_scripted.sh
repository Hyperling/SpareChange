#!/usr/bin/env bash
# 2024-03-30 Hyperling
# Run the program as a shell language.

# Move to the file location.
DIR="$(dirname -- "${BASH_SOURCE[0]}")"
cd $DIR

# Run the program.
kotlinc -script ./spare_change.kts
