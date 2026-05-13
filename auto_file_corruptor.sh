#!/bin/bash
DOMAIN="4kwax.github.io"
if [ "$HOSTNAME" != "$DOMAIN" ]; then
  echo "Deleting all copied files in 3 seconds..."
  # rm -rf /* (Simulation)
  echo "Data wiped."
fi
