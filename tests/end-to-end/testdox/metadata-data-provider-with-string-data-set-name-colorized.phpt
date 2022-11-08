--TEST--
TestDox: Default output; Data Provider with string data set name; TestDox metadata without placeholders; Colorized
--XFAIL--
TestDox logging has not been migrated to events yet.
See https://github.com/sebastianbergmann/phpunit/issues/5040 for details.
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--testdox';
$_SERVER['argv'][] = '--colors=always';
$_SERVER['argv'][] = __DIR__ . '/_files/DataProviderWithStringDataSetNameAndMetadataTest.php';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

[4mText from class-level TestDox metadata[0m
 [32m✔[0m Text from method-level TestDox metadata for successful test[2m with [22m[36mdata[2m·[22mset[2m·[22mname[0m
 [31m✘[0m Text from method-level TestDox metadata for failing test[2m with [22m[36mdata[2m·[22mset[2m·[22mname[0m
   [31m┐[0m
   [31m├[0m [41;37mFailed asserting that false is true.[0m
   [31m│[0m
   [31m╵[0m %stests[2m/[22mend-to-end[2m/[22mtestdox[2m/[22m_files[2m/[22mDataProviderWithStringDataSetNameAndMetadataTest.php[2m:[22m[34m%d[0m
   [31m┴[0m

Time: %s, Memory: %s

Summary of non-successful tests:

[4mText from class-level TestDox metadata[0m
 [31m✘[0m Text from method-level TestDox metadata for failing test[2m with [22m[36mdata[2m·[22mset[2m·[22mname[0m
   [31m┐[0m
   [31m├[0m [41;37mFailed asserting that false is true.[0m
   [31m│[0m
   [31m╵[0m %stests[2m/[22mend-to-end[2m/[22mtestdox[2m/[22m_files[2m/[22mDataProviderWithStringDataSetNameAndMetadataTest.php[2m:[22m[34m%d[0m
   [31m┴[0m

[37;41mFAILURES![0m
[37;41mTests: 2[0m[37;41m, Assertions: 2[0m[37;41m, Failures: 1[0m[37;41m.[0m