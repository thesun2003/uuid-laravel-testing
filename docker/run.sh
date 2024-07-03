#!/usr/bin/env bash

help_output() {
    echo "Usage: $0 {build|start|stop}"
    echo "  build         - Build images for testing environment"
    echo "  up            - Start testing environment"
    echo "  down          - Stop testing environment"
    echo "  help          - Display this help message"

    return 0
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
export SCRIPT_DIR

COMPOSE_PATH="$SCRIPT_DIR/docker-compose.yml"

set -a
ROOT_PATH="$SCRIPT_DIR/.."
SRC_PATH="$ROOT_PATH/src"
DATA_PATH="$ROOT_PATH/data"
set +a

build() {
    docker compose --project-name "uuid-laravel-testing" -f "$COMPOSE_PATH" build
}

up() {
    docker compose --project-name "uuid-laravel-testing" -f "$COMPOSE_PATH" up -d --remove-orphans
}

down() {
    docker compose --project-name "uuid-laravel-testing" -f "$COMPOSE_PATH" down --remove-orphans
}

case "$1" in
  up)
    up
    ;;
  down)
    down
    ;;
  build)
    build
    ;;
  *)
    help_output
    exit 1
esac

exit $?