#!/usr/bin/env bash
# 2024-03-30 Hyperling
# Compile the .kt file and run the compiled binary.

# Move to the file location.
DIR="$(dirname -- "${BASH_SOURCE[0]}")"
cd $DIR

# Compile the script.
kotlinc spare_change.kt -include-runtime -d spare_change.kt.jar

# Run the executable.
chmod 755 ./spare_change.kt.jar
java -jar spare_change.kt.jar
rm -rfv ./spare_change.kt.jar
