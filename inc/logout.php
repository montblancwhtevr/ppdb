<?php
@session_start();
session_destroy();
header("location:/ppdb/index.php");
