<?php

session_start();
session_unset();
session_destroy();

//Going back to front page after logout
header("Location: ../index.php?error=none");