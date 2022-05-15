# Error templates

This repository contains the error templates used by Enflow's projects. By generalizing this, we can include this composer project and load those views in there, and use them on server level.

## 500 error example
![500 error](/docs/500-example.png)

## Notes

1) Ensure files are under `www-data`
2) `sudo -u www-data php symlink.php`