<?php

echo "# Running database updates...\n";
passthru('drush updatedb -y');
echo "# Database updates complete.\n";

echo "# Rebuilding cache...\n";
passthru('drush cr');
echo "# Rebuilding cache complete.\n";

echo "# Importing configuration...\n";
passthru('drush config-import -y');
echo "# Import of configuration complete.\n";

echo "# Rebuilding cache.\n";
passthru('drush cr');
echo "# Rebuilding cache complete...\n";
