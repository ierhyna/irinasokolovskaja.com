<?php
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'cd .. && git reset --hard HEAD && git pull' );
}
?>
