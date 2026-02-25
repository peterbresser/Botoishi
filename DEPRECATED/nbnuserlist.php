<?php

echo " 
  <script language=\"javascript\">
const { exec } = require('child_process');

exec('curl -s https://example.com', (error, stdout, stderr) => {
  if (error) {
    console.error(`Error: ${error}`);
    return;
  }
  if (stderr) {
    console.error(`stderr: ${stderr}`);
    return;
  }
  console.log(`stdout: ${stdout}`);
});
</script>";