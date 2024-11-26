# PHP Unit Testing with PHPUnit

## Section 1: Introduction and project setup

### Install PHP and Composer (macOS)

In order to run PHPUnit first you need to have PHP installed locally. PHPUnit requires the latest version of PHP. Next,
install Composer as this will be need to download the PHPUnit package.

### Create a project folder and install PHPUnit

Once we have everything we need installed we can create a project folder and install PHPUnit. We will do this using
Composer: `composer require --dev phpunit/phpunit`. Once the installation is done, on Mac or Linux you can run PHPUnit
by using the following command: `./vendor/phpunit/phpunit/phpunit`. This command will run PHPUnit and show the usage
information:

```
PHPUnit 11.3.1 by Sebastian Bergmann and contributors.

Usage:
  phpunit [options] <directory|file> ...

Configuration:

  --bootstrap <file>                 A PHP script that is included before the tests run
  -c|--configuration <file>          Read configuration from XML file
  --no-configuration                 Ignore default configuration file (phpunit.xml)
  --extension <class>                Register test runner extension with bootstrap <class>
  --no-extensions                    Do not register test runner extensions
  --include-path <path(s)>           Prepend PHP's include_path with given path(s)
  -d <key[=value]>                   Sets a php.ini value
  --cache-directory <dir>            Specify cache directory
  --generate-configuration           Generate configuration file with suggested settings
  --migrate-configuration            Migrate configuration file to current format
  --generate-baseline <file>         Generate baseline for issues
  --use-baseline <file>              Use baseline to ignore issues
  --ignore-baseline                  Do not use baseline to ignore issues

Selection:

  --list-suites                      List available test suites
  --testsuite <name>                 Only run tests from the specified test suite(s)
  --exclude-testsuite <name>         Exclude tests from the specified test suite(s)
  --list-groups                      List available test groups
  --group <name>                     Only run tests from the specified group(s)
  --exclude-group <name>             Exclude tests from the specified group(s)
  --covers <name>                    Only run tests that intend to cover <name>
  --uses <name>                      Only run tests that intend to use <name>
  --list-test-files                  List available test files
  --list-tests                       List available tests
  --list-tests-xml <file>            List available tests in XML format
  --filter <pattern>                 Filter which tests to run
  --exclude-filter <pattern>         Exclude tests for the specified filter pattern
  --test-suffix <suffixes>           Only search for test in files with specified suffix(es). Default: Test.php,.phpt

Execution:

  --process-isolation                Run each test in a separate PHP process
  --globals-backup                   Backup and restore $GLOBALS for each test
  --static-backup                    Backup and restore static properties for each test

  --strict-coverage                  Be strict about code coverage metadata
  --strict-global-state              Be strict about changes to global state
  --disallow-test-output             Be strict about output during tests
  --enforce-time-limit               Enforce time limit based on test size
  --default-time-limit <sec>         Timeout in seconds for tests that have no declared size
  --dont-report-useless-tests        Do not report tests that do not test anything

  --stop-on-defect                   Stop after first error, failure, warning, or risky test
  --stop-on-error                    Stop after first error
  --stop-on-failure                  Stop after first failure
  --stop-on-warning                  Stop after first warning
  --stop-on-risky                    Stop after first risky test
  --stop-on-deprecation              Stop after first test that triggered a deprecation
  --stop-on-notice                   Stop after first test that triggered a notice
  --stop-on-skipped                  Stop after first skipped test
  --stop-on-incomplete               Stop after first incomplete test

  --fail-on-empty-test-suite         Signal failure using shell exit code when no tests were run
  --fail-on-warning                  Signal failure using shell exit code when a warning was triggered
  --fail-on-risky                    Signal failure using shell exit code when a test was considered risky
  --fail-on-deprecation              Signal failure using shell exit code when a deprecation was triggered
  --fail-on-notice                   Signal failure using shell exit code when a notice was triggered
  --fail-on-skipped                  Signal failure using shell exit code when a test was skipped
  --fail-on-incomplete               Signal failure using shell exit code when a test was marked incomplete

  --cache-result                     Write test results to cache file
  --do-not-cache-result              Do not write test results to cache file

  --order-by <order>                 Run tests in order: default|defects|depends|duration|no-depends|random|reverse|size
  --random-order-seed <N>            Use the specified random seed when running tests in random order

Reporting:

  --colors <flag>                    Use colors in output ("never", "auto" or "always")
  --columns <n>                      Number of columns to use for progress output
  --columns max                      Use maximum number of columns for progress output
  --stderr                           Write to STDERR instead of STDOUT

  --no-progress                      Disable output of test execution progress
  --no-results                       Disable output of test results
  --no-output                        Disable all output

  --display-incomplete               Display details for incomplete tests
  --display-skipped                  Display details for skipped tests
  --display-deprecations             Display details for deprecations triggered by tests
  --display-errors                   Display details for errors triggered by tests
  --display-notices                  Display details for notices triggered by tests
  --display-warnings                 Display details for warnings triggered by tests
  --reverse-list                     Print defects in reverse order

  --teamcity                         Replace default progress and result output with TeamCity format
  --testdox                          Replace default result output with TestDox format
  --testdox-summary                  Repeat TestDox output for tests with errors, failures, or issues

  --debug                            Replace default progress and result output with debugging information

Logging:

  --log-junit <file>                 Write test results in JUnit XML format to file
  --log-teamcity <file>              Write test results in TeamCity format to file
  --testdox-html <file>              Write test results in TestDox format (HTML) to file
  --testdox-text <file>              Write test results in TestDox format (plain text) to file
  --log-events-text <file>           Stream events as plain text to file
  --log-events-verbose-text <file>   Stream events as plain text with extended information to file
  --no-logging                       Ignore logging configured in the XML configuration file

Code Coverage:

  --coverage-clover <file>           Write code coverage report in Clover XML format to file
  --coverage-cobertura <file>        Write code coverage report in Cobertura XML format to file
  --coverage-crap4j <file>           Write code coverage report in Crap4J XML format to file
  --coverage-html <dir>              Write code coverage report in HTML format to directory
  --coverage-php <file>              Write serialized code coverage data to file
  --coverage-text=<file>             Write code coverage report in text format to file [default: standard output]
  --only-summary-for-coverage-text   Option for code coverage report in text format: only show summary
  --show-uncovered-for-coverage-text Option for code coverage report in text format: show uncovered files
  --coverage-xml <dir>               Write code coverage report in XML format to directory
  --warm-coverage-cache              Warm static analysis cache
  --coverage-filter <dir>            Include <dir> in code coverage reporting
  --path-coverage                    Report path coverage in addition to line coverage
  --disable-coverage-ignore          Disable metadata for ignoring code coverage
  --no-coverage                      Ignore code coverage reporting configured in the XML configuration file

Miscellaneous:

  -h|--help                          Prints this usage information
  --version                          Prints the version and exits
  --atleast-version <min>            Checks that version is greater than <min> and exits
  --check-version                    Checks whether PHPUnit is the latest version and exits
```

We can use an alias: `alias phpunit="./vendor/phpunit/phpunit/phpunit"` that will allow us to run PHPUnit with simply
the `phpunit` command.

## Section 2: Unit testing with PHPUnit - the basics

### Write and run your first test: an introduction to assertions

Now that we are ready to create tests lets create a folder called `tests` and inside of it a class called `ExampleTest`.
The test needs to extend the `TestCase` class from PHPUnit.

```php
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

}
```

When running the test in the terminal we need to point to where it is located: `phpunit tests/ExampleTest.php`. When
running it at this point we will get a warning that there are no tests found inside the class.

Inside a test class an individual test is a public method prefixed with the word `test` followed by a description of
what the test does. It is important to give test methods meaningful names. Let's start with a trivial test just to get
an
idea of what a test looks like. This test will check whether 2 and 2 equals 4.

```php
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function testAddingTwoPlusTwoResultsInFour()
	{

	}
}
```

When running the test now we get a message that there is one test, but it does not perform any assertions:

```
There was 1 risky test:

1) ExampleTest::testAddingTwoPlusTwoResultsInFour
This test did not perform any assertions

/Users/rodwinpieterse/Documents/learning-phpunit/tests/ExampleTest.php:7

OK, but there were issues!
Tests: 1, Assertions: 0, Risky: 1.
```

What is an assertion? An assertion verifies that a condition is true. In our test we will verify that 2 + 2 is equal to
four.
To do this we use the `assertEquals` method, passing in first the expected value (4 in this case) then the actual value
we want to compare it with (2 + 2). The `assertEquals` method comes from the parent class which this class extends.

Now when we run the test again we see that we have one test and assertions and that all is OK.

```
PHPUnit 11.3.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.9

.                                                                   1 / 1 (100%)

Time: 00:00.020, Memory: 6.00 MB

OK (1 test, 1 assertion)
```

Let's intentionally create a failing test by changing the expected value to 5 and we'll see what a failure looks like:

```
PHPUnit 11.3.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.9

F                                                                   1 / 1 (100%)

Time: 00:00.060, Memory: 8.00 MB

There was 1 failure:

1) ExampleTest::testAddingTwoPlusTwoResultsInFour
Failed asserting that 4 matches expected 5.

/Users/rodwinpieterse/Documents/learning-phpunit/tests/ExampleTest.php:9

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```

### Test a function: using multiple assertions

The previous test doesn't test anything useful. Unit tests usually test the behaviour of a function or class. Let's
write
some tests to test a function.

We create a file called `functions.php` which contains a simple function called `add` that takes two arguments and
returns the sum of those arguments:

```php
<?php

/**
 * @param int $a
 * @param int $b
 * @return integer
 */
function add(int $a, int $b): int
{
	return $a + $b;
}
```

We'll add a new class to our `tests/` folder called `FunctionClass.php` to write our tests in. Because we are testing a
function we need to require it inside our test case, then call `assertEquals`, pass teh expected value, and give the
method the values to test.

```php
<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testAddReturnsTheCorrectSum()
	{
		require "functions.php";

		$this->assertEquals(4, add(2, 2));
	}
}
```

We run the test similar to the previous one by referencing the file path. You can have more than one assertion inside
a test case if it makes sense to do so.

```php
<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testAddReturnsTheCorrectSum()
	{
		require "functions.php";

		$this->assertEquals(4, add(2, 2));
		$this->assertEquals(8, add(3, 5));

	}
}
```

### Test that incorrect results are not returned: using multiple test methods

In addition to checking for the correct result when testing code, often we want to test that incorrect results are not
returned. We will add a method to our existing function to do so and use the `assertNotEquals` method:

```php
<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testAddReturnsTheCorrectSum()
	{
		require "functions.php";

		$this->assertEquals(4, add(2, 2));
		$this->assertEquals(8, add(3, 5));

	}

	public function testAddDoesNotReturnTheIncorrectSum()
	{
		$this->assertNotEquals(5, add(2, 2));
	}
}
```

Note that we did not have to require the method again. What we've seen is that you can have more than one method in a
test class. The idea of a test class is to test every aspect of the code you are testing, both that the correct results
are obtained and, sometimes, the incorrect results are not.

### Test a class: fixing bugs through testing

In addition to testing functions we can also test classes. We created a `User` class that might represent the users of
an application. The `getFullName` method concatenates the user's first and last names with a space in between.

```php
<?php

class User
{
	public string $first_name;
	public string $surname;

	public function getFullName(): string
	{
		return "$this->first_name $this->surname";
	}
}
```

We'll add a test class called `UserTest`. It is good practice for the name of test classes to mirror the name of the
class
being tested.

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		require "User.php";

		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}
}
```

Here we successfully tested that the full name is returned correctly based on the first and lastname properties.
However,
if these properties aren't set we want the function to return an empty string.

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		require "User.php";

		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}
}
```

Now we will see a failure because of the space in the method. If the properties are empty the space will still be
returned.
For this we will use the `trim` function. This is a good example of how testing can help you avoid unintended behaviour.

```php
<?php

class User
{
	public $first_name;
	public $surname;

	public function getFullName(): string
	{
		return trim("$this->first_name $this->surname");
	}
}
```

### How to name your test methods

To create a test method inside a test class we create a public method and prefix its name with the word test. When we
add another method without the prefix of `test` it won't run. The idea behind the test method names is that it is made
as clear as possible. If you don't want to name your methods using the `test` prefix there is an alternative which is to
use dock blocks.

**NOTE**: This seems to be deprecated in newer versions of PHPUnit.

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		require "User.php";

		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}

	/*
	 * @test
	 */
	public function user_has_firstname()
	{
		$user = new User;

		$user->first_name = "Teresa";

		$this->assertEquals("Teresa", $user->first_name);
	}
}
```

## Section 3: Configuring the PHPUnit test environment

Up until now we have written some test classes and ran them on the command line using the `phpunit` executable, also
known as the test runner. If we run the executable without passing it a file name we get the various options we can use
when running a test.

E.g. instead of passing in the full path to the test class file we can just pass in the name, and it will still run
that file: `phpunit tests/UserTest`.

We can also just pass in the path to a folder and the test runner will run all the test classes in that folder:
`phpunit tests/`

We can also run a single test method inside a class: `phpunuit tests/ --filter=testReturnsFullName`.

We can add the color flag to display output in color: `phpunit tests/ --color`. If successful the output is in green and
if there are failing tests it will be in red.

There are many more options to look at in the usage information when running `phpunit` command.

### Configure PHPUnit: the XML configuration file

When running tests without specifying any options the test runner just uses various defaults. Instead of specifying the
various options on the command line each time you run your tests you can specify them in a configuration file. We'll
create a file called `phpunit.xml` in the root folder of our project.

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<phpunit colors="true" verbose="true">
    <testsuites>
        <testsuite name="Test suite">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

In the xml file we set the colors to display always and pointed to the `tests` directory. This will allow us to run the
tests with only the `phpunit` command. This does replace the usage information previously displayed. If you want to view
that you can run `phpunit -h`.

### Autoload classes being tested using Composer

When we tested the `User` class we had to load the file where the class is defined using `require`. Let's use autoload
instead, so we don't have to worry about loading class files manually.

We could register an autoload function using `spl_autoload_register` but it is much easier to use autoloading in
composer.
First let's create a folder named `src` in our project root to store our class files. Next we will move our `User` class
into this folder.

In `composer.json` add an autoload section and inside it an empty prefix which will make the autoloader look for all
unloaded classes
in any namespace in this folder:

```json
{
  "require-dev": {
    "phpunit/phpunit": "^11.3"
  },
  "autoload": {
    "psr-4": {
      "": "src/"
    }
  }
}
```

In the `UserTest` class we can now remove the explicit require:

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}

	/*
	 * @test
	 */
	public function user_has_firstname()
	{
		$user = new User;

		$user->first_name = "Teresa";

		$this->assertEquals("Teresa", $user->first_name);
	}
}
```

Next generate the autoload files by running `composer dump-autoload`

and get PHPUnit to call the autoloader directly with the bootstrap option. This option allows us to run some code
before the tests are run, so we'll pass in the path to composer's autoloader.

`phpunit --bootstrap='vendor/autoload.php'`

Now that we've set this up any classes in the `src` folder will be autoloaded. We can also set the bootstrap command
in the `phpunit.xml` configuration to make it easier to run like before.

## Section 4: Test dependencies, fixtures and exceptions

### Unit test a queue class

Now we have PHPUnit configured, and we'll test some more code. We will add a class called `Queue` that is a simple
implementation of a queue data structure.

```php
<?php

class Queue
{
	protected array $items = [];

	public function push($item): void
	{
		$this->items[] = $item;
	}

	public function pop()
	{
		return array_pop($this->items);
	}

	public function getCount(): int
	{
		return count($this->items);
	}
}
```

In the `tests` folder we will now create a `QueueTest` class. First we'll test that the number of items in a new queue
is zero.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{
		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());
	}
}
```

Next let's test that an item is added to the queue.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{
		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		$queue = new Queue;

		$queue->push('green');

		$this->assertEquals(1, $queue->getCount());
	}
}
```

Now let's test that we can remove an item from the queue, and that the item we removed is the same as the one put on the
queue. Before we can remove an item we have to add one first.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{
		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		$queue = new Queue;

		$queue->push('green');

		$this->assertEquals(1, $queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		$queue = new Queue;

		$queue->push('green');
		$item = $queue->pop();

		$this->assertEquals(0, $queue->getCount());
		$this->assertEquals('green', $item);
	}
}
```

### Test dependencies: making one test method dependent on another

Looking at the previous tests we can see that we have a bit of duplication:

1. The second test requires us to create an empty queue first before adding aan item to it, which we are already doing
   in the first test.

We can make the second test dependent on the first and pass the empty queue from the first test to the second.

First we need to return the `queue` from the first test in order to be able to access it. Then to make the second test
dependent on the first we add a comment block that contains the `@depends` annotation followed by the name of the method
it depends on. The value returned from the first test method should then be passed into the second as an argument.

The dependant test is known as the consumer and the test we depend on is known as a producer.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{
		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());

		return $queue;
	}

	/**
	 * @depends testNewQueueIsEmpty
	 */
	public function testAnItemIsAddedToTheQueue(Queue $queue)
	{
		$queue->push('green');

		$this->assertEquals(1, $queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		$queue = new Queue;

		$queue->push('green');
		$item = $queue->pop();

		$this->assertEquals(0, $queue->getCount());
		$this->assertEquals('green', $item);
	}
}
```

Now let's look at the third test method. First we create a queue, push an item onto it, and then remove it. It would
be simpler if we already had queue with an item on it, which we can get from the second method.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{
		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());

		return $queue;
	}

	/**
	 * @depends testNewQueueIsEmpty
	 */
	public function testAnItemIsAddedToTheQueue(Queue $queue)
	{
		$queue->push('green');

		$this->assertEquals(1, $queue->getCount());

		return $queue;
	}


	/**
	 * @depends testAnItemIsAddedToTheQueue
	 */
	public function testAnItemIsRemovedFromQueue(Queue $queue)
	{
		$item = $queue->pop();

		$this->assertEquals(0, $queue->getCount());
		$this->assertEquals('green', $item);
	}
}
```

We have now removed some repetition by making the tests dependent on each other.

**NOTE**: We did run into a deprecation warning which we can ignore/disable for learning purposes as this will come in
effect with the next update of PHPUnit:

`Metadata found in doc-comment for method QueueTest::testAnItemIsAddedToTheQueue(). Metadata in doc-comments is
deprecated and will no longer be supported in PHPUnit 12. Update your test code to use attributes instead.`

### Fixtures: set up the known state of the tests using setUp and tearDown

Using the `@depends` annotation allows us to make one test depend on another. However, having dependencies like this can
make it difficult to understand where a tests' data is coming from. It is also generally good practice for each unit
test
to be independent and not affect any other test.

Before we had these dependencies we were repeating code in each test that set up the data to a known state before we
made any assertions, e.g. creating a new object. This known state is called the **fixture** of the test.

Instead of making tests dependent on each other, PHPUnit provides methods to set up the known state/fixture of each test
method.

The first is a method called `setUp`. This method will be called before each test method. The known state for our queue
tests is the instantiation of the `Queue` object which we will now do in the setup method, allowing us to remove
doc-comments,
return statements, and method arguments, leading to each test being isolated as best practice prescribes.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	protected Queue $queue;
	
	protected function setUp(): void
	{
		$this->queue = new Queue;
	}

	public function testNewQueueIsEmpty()
	{
		$this->assertEquals(0, $this->queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		$this->queue->push('green');

		$this->assertEquals(1, $this->queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		$this->queue->push('green');
		$item = $this->queue->pop();

		$this->assertEquals(0, $this->queue->getCount());
		$this->assertEquals('green', $item);
	}
}
```

Note that for the third test we had to reinsert the `push` method.

In addition to the `setUp` method we also have a `tearDown` method which runs after each test. In here you would put
code
to clean up after each test. You might want to destroy the object created in the setup method in this case:

````php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	protected Queue $queue;
	protected function setUp(): void
	{
		$this->queue = new Queue;
	}
	
	protected function tearDown(): void
	{
		unset($this->queue);
	}

	public function testNewQueueIsEmpty()
	{
		$this->assertEquals(0, $this->queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		$this->queue->push('green');

		$this->assertEquals(1, $this->queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		$this->queue->push('green');
		$item = $this->queue->pop();

		$this->assertEquals(0, $this->queue->getCount());
		$this->assertEquals('green', $item);
	}
}
````

In practice the only time you might need to unset variables like this is when you created many objects that use a lot of
memory. What the `tearDown` method is used for is when you are creating external resources e.g. writing to a file or
opening
a network socket. Most of the time you won't need to use this method.

### Easily add a new test method using the test fixture

Now that we've added the `setUp` method let's add a new test, so we can see how fixtures are easier to use than
dependencies.
We're already testing that we can remove an item from the queue, but we aren't testing the order in which they are
removed.

Let's add a new test method to test that an item is removed from the front of the queue. We start by pushing two items
onto the queue, we know from the `setUp` method that the queue property will contain an empty Queue object. The let's
assert that
the pop method returns the first item in the queue.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	protected Queue $queue;
	protected function setUp(): void
	{
		$this->queue = new Queue;
	}

	protected function tearDown(): void
	{
		unset($this->queue);
	}

	public function testNewQueueIsEmpty()
	{
		$this->assertEquals(0, $this->queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		$this->queue->push('green');

		$this->assertEquals(1, $this->queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		$this->queue->push('green');
		$item = $this->queue->pop();

		$this->assertEquals(0, $this->queue->getCount());
		$this->assertEquals('green', $item);
	}

	public function testAnItemIsRemovedFromTheFrontOfTheQueue()
	{
		$this->queue->push('first');
		$this->queue->push('second');

		$this->assertEquals('first', $this->queue->pop());
	}
}
```

When running this we get a failure because the `pop` method returns the last item in the queue. We have found a bug! We
can fix this by using the `array_shift` method instead.

```php
<?php

class Queue
{
	protected array $items = [];

	public function push($item): void
	{
		$this->items[] = $item;
	}

	public function pop()
	{
		return array_shift($this->items);
	}

	public function getCount(): int
	{
		return count($this->items);
	}
}
```

### Share fixtures between tests for resource-intensive data

In a test class, the `setUp` method is run before every test method. We just used this to create a new `Queue` object
for every test so each test started with a known state/fixture.

This is fine if you're doing something simple, like creating a new object like this, but there are times when the setup
code is more complicated, and you might not want to call it for every test method. Hence, why in addition to the `setUp`
and `tearDown` methods, we also have a `setUpBeforeClass` and a `tearDownAfterClass` method.

```php

	public static function setUpBeforeClass(): void
	{
	}
	
	public static function tearDownAfterClass(): void
	{
	}
```

These methods are just executed once. The `setUpBeforeClass` method is run before the first test of the class is run,
and
the `tearDownAfterClass` is run after the last test of the class is run. In the case of our `Queue` example, you might
be connecting to a message queue server, or connecting to a database that is going to act as a queue, both tasks that
might
take a long time and use significant resources.

In this case you can share fixtures between test methods by using these methods. As these methods are `static` we need
to change the `queue` property where we store the fixture to a static one.

```php
	protected static Queue $queue;
```

Then in the `setUpBeforeClass` method let's assign a new object to this property.

```php
	public static function setUpBeforeClass(): void
	{
		static::$queue = new Queue;
	}
```

Here we're not doing anything resource intensive, but this where you might connect to a message queue server.

In the `tearDownAfterClass` method we'll set the property to `null`.

```php
	public static function tearDownAfterClass(): void
	{
		static::$queue = null;
	}
```

Again, this is just an example, but here is where you would disconnect from the server, or close the database
connection.

Then we need to reference the `queue` properties accordingly as it is now `static`.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	protected static Queue|null $queue;
	protected function setUp(): void
	{
	}

	public static function setUpBeforeClass(): void
	{
		static::$queue = new Queue;
	}

	public static function tearDownAfterClass(): void
	{
		static::$queue = null;
	}

	public function testNewQueueIsEmpty()
	{
		$this->assertEquals(0, static::$queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		static::$queue->push('green');

		$this->assertEquals(1, static::$queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		static::$queue->push('green');
		$item = $this->queue->pop();

		$this->assertEquals(0, static::$queue->getCount());
		$this->assertEquals('green', $item);
	}

	public function testAnItemIsRemovedFromTheFrontOfTheQueue()
	{
		static::$queue->push('first');
		static::$queue->push('second');

		$this->assertEquals('first', static::$queue->pop());
	}
}
```

Running the test suite will cause failures. The reason is that previously, every test method started with an
empty `Queue`
object. Now, the `Queue` object is shared between all methods, so when the method failing runs, there is already an
item in the queue. To fix our tests we want to start each method with an empty `Queue` object as before.

We'll add a method to the `Queue` class to empty the queue.

```php
<?php

class Queue
{
	protected array $items = [];

	public function push($item): void
	{
		$this->items[] = $item;
	}

	public function pop()
	{
		return array_shift($this->items);
	}

	public function getCount(): int
	{
		return count($this->items);
	}

	public function clear(): void
	{
		$this->items = [];
	}
}
```

Then in the tests we'll call this method which will empty the queue before each test method.

```php
<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	protected static Queue|null $queue;
	protected function setUp(): void
	{
		static::$queue->clear();
	}

	public static function setUpBeforeClass(): void
	{
		static::$queue = new Queue;
	}

	public static function tearDownAfterClass(): void
	{
		static::$queue = null;
	}

	public function testNewQueueIsEmpty()
	{
		$this->assertEquals(0, static::$queue->getCount());
	}

	public function testAnItemIsAddedToTheQueue()
	{
		static::$queue->push('green');

		$this->assertEquals(1, static::$queue->getCount());
	}

	public function testAnItemIsRemovedFromQueue()
	{
		static::$queue->push('green');
		$item = static::$queue->pop();

		$this->assertEquals(0, static::$queue->getCount());
		$this->assertEquals('green', $item);
	}

	public function testAnItemIsRemovedFromTheFrontOfTheQueue()
	{
		static::$queue->push('first');
		static::$queue->push('second');

		$this->assertEquals('first', static::$queue->pop());
	}
}
```

It should be noted that sharing fixtures can result in tests being dependent on each other or coupled together so
exercise caution when using these methods.

### Testing exceptions: expecting code to throw an exception

So far we have been using assertions to test that the code works the way we want it to. Sometimes though, things can go
wrong in your code. The way PHP signals that something has gone wrong is by throwing an exception. We've made some
changes to the queue class so that we can get it to throw an exception, so we can test it.

First we added a constant that represents the maximum number of items in the queue:

```php
	public const MAX_ITEMS = 5;
```

Then in the `push` method if you try and add an item to the queue, and the queue is full it throws an exception.

```php
	/**
	 * @param $item
	 * @return void
	 * @throws QueueException if the number of items on the queue exceeds the MAX_ITEMS value
	 */
	public function push($item): void
	{
		if ($this->getCount() == static::MAX_ITEMS) {
			throw new QueueException("Queue is full");
		}
		$this->items[] = $item;
	}
```

The exception thrown is a custom exception class we created in the `src` folder.

```php
<?php

class QueueException extends Exception
{
}
```

First let's test that we can add up to the maximum number of items with no problems.

```php
	/**
	 * @throws QueueException
	 */
	public function testMaxNumberOfItemsCanBeAdded()
	{
		for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
			static::$queue->push($i);
		}

		$this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());
	}
```

Now we can test for the exception being thrown if we try to add an item to a full queue. We cannot add anything after
the line we expect to throw the exception. PHP gives us the `expectException` method to run before the line.

```php
	/**
	 * @throws QueueException
	 */
	public function testExceptionThrownWhenAddingAnItemToAFullQueue()
	{
		for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
			static::$queue->push($i);
		}

		$this->expectException(QueueException::class);
		static::$queue->push("wafer thin mint");
	}
```

In addition to this method we can also test for the message. Let's add it to the test.

```php
	/**
	 * @throws QueueException
	 */
	public function testExceptionThrownWhenAddingAnItemToAFullQueue()
	{
		for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
			static::$queue->push($i);
		}

		$this->expectExceptionMessage("Queue is full");
		$this->expectException(QueueException::class);
		static::$queue->push("wafer thin mint");
	}
```

Note that the test runner reports the exceptions as assertions, they are not run separately.

## Test doubles:mocks and stubs

### Test doubles: create mock objects to remove dependencies on external resources

We have so far been testing individual standalone classes that don't use any other classes inside their methods. It is
however very common to have methods that rely on other classes. E.g. a `User` class might use a Database object or
a `Mailer`
class that sends an email etc.

When we test a class we want to do so in isolation. Any dependent classes will have their own tests. That is why ideally
we don't want to use these dependent classes as their methods could take some time to execute or even be unavailable,
e.g. if they are connecting to an external server.

Using them could also have unintended consequences, such as really sending an email or even debiting a bank account. So
how do avoid using dependent classes when testing a class? The solution is to use **Test Doubles** where we replace the
object
of a dependent class with a fake or mock object, meaning we can have full control of the mock object. SO we can remove
all dependencies on external code or external resources when we test a class.

Let's look at an example:

Below we have a class called `Mailer` which contains a method to send a message, taking an `$email` address and the
`$message` as arguments. To send an email you would probably use PHP's `mail` function or PHPMailer which uses a server.
FOr the purpose of this demonstration we just want the method to respond. So we have a three-second delay to simulate the
time it might take for a method like this to execute. Then we print a message and return `true`.

```php
<?php

class Mailer
{
	/**
	 * @param $email
	 * @param $message
	 * @return true
	 */
	public function sendMessage($email, $message)
	{
		sleep(3);
		echo "Send '$message' to '$email'";

		return true;
	}
}
```

Let's add a new test class called `MockTest` so we can see how mocking works. Before we create a mock object we'll first
use the `Mailer` class how it would be used normally.

```php
<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
	public function testMock()
	{
		$mailer = new Mailer;
		$result = $mailer->sendMessage('dave@example.com', 'Hello');

		var_dump($result);
	}
}
```

Now when we run phpunit we get the three-second delay from calling the `sendMessage` method along with the dump of the
result. The purpose of doing the above was to show how we might use this class.

When we're testing a class that depends on this one though, we want to create a mock version of this class. Instead of
creating an object of the `Mailer` class, we can use the `createMock` method passing in the name of the class that we
are mocking.

This mock object contains all the properties and methods of the original, however now the methods don't do anything they
just return `null`.

```php
<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
	public function testMock()
	{
		$mock = $this->createMock(Mailer::class);
		$result = $mock->sendMessage('dave@example.com', 'Hello');

		var_dump($result);
	}
}
```
Above we can see that this mock object contains the method, and it accepts the arguments. These methods are known 
as **stubs,** and they replace the original method from the mocked class. By default, they return `null` but we change this
to return something else by telling the mock object that this method will return `true`. We do this before we call the
method.

```php
<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
	public function testMock()
	{
		$mock = $this->createMock(Mailer::class);

		$mock->method('sendMessage')
			->willReturn(true);

		$result = $mock->sendMessage('dave@example.com', 'Hello');

		var_dump($result);
	}
}
```

Now when we run the test we can see that `true` is returned from the stub method call. Let's change the `var_dump` to
an assertion asserting that the method call has returned `true`.

```php
<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
	public function testMock()
	{
		$mock = $this->createMock(Mailer::class);

		$mock->method('sendMessage')
			->willReturn(true);

		$result = $mock->sendMessage('dave@example.com', 'Hello');

		$this->assertTrue($result);
	}
}
```

Now when run all the tests pass.

### Dependency injection: inject objects that a class depends on

At the moment our `User` class isn't dependent on any other classes. Let's change this by adding a dependence on the
Mailer class.

First let's add a property for the user's email address, then let's add a notify method, so we can send the user a message
which takes the text of a message as an argument. In the `notify` method we will use the `Mailer` class and call the 
`sendMessage` method, passing in the user's email address and the message and returning its return value directly.

So now when we use the `notify` method on a `User` object it will use the `Mailer` class to send a message. The `Mailer`
class still doesn't have any real functionality aside from faking a delay of three seconds.

```php
<?php

class User
{
	public string $first_name;
	public string $surname;

	public string $email;

	public function getFullName(): string
	{
		return trim("$this->first_name $this->surname");
	}

	public function notify($message): true
    {
		$mailer = new Mailer;

		return $mailer->sendMessage($this->email, $message);
	}
}
```

Let's add a test to the `UserTest` class to test this new method.

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}

	/*
	 * @test
	 */
	public function user_has_firstname()
	{
		$user = new User;

		$user->first_name = "Teresa";

		$this->assertEquals("Teresa", $user->first_name);
	}

	public function testNotificationIsSent()
	{
		$user = new User;

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
}
```

We don't want to use the real `Mailer` class for reasons previously discussed, so let's create a mock instead.

```php
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')
            ->willReturn(true);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
```

When we run this nothing has changed because we are still using the real `Mailer` class. (Note the three-second delay)
So how do we tell the `User` class to use the mock instead? At the moment we can't. The dependency on the `Mailer`
class is hardcoded into the `User` class inside this method:

```php
	public function notify($message): true
    {
		$mailer = new Mailer;

		return $mailer->sendMessage($this->email, $message);
	}
```

When testing this class we currently have no way of telling  the `User` class to use the mock object we just created.
This is where dependency injection comes in. Instead of having a hardcoded dependency like this inside a class, we 
inject any dependent classes inside this class so that we can replace them when we are testing.

```php
<?php

class User
{
	public $first_name;
	public $surname;

	public $email;

    // Injecting the Mailer dependency
    private Mailer $mailer;


//    We can inject the dependency in a setter or in a constructor
    public function setMailer(Mailer $mailer): void
    {
        $this->mailer = $mailer;
    }

	public function getFullName(): string
	{
		return trim("$this->first_name $this->surname");
	}

	public function notify($message): true
    {
        // Note here we have removed the Mailer object previously created
		return $this->mailer->sendMessage($this->email, $message);
	}
}
```

```php
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}

	/*
	 * @test
	 */
	public function user_has_firstname()
	{
		$user = new User;

		$user->first_name = "Teresa";

		$this->assertEquals("Teresa", $user->first_name);
	}

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')
            ->willReturn(true);

        // The mock mailer will now get passed to our injected setMailer method
        $user->setMailer($mock_mailer);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
}
```

### Test object interactions: verify how a dependency is used

When testing the `User` class we just replaced a dependency using a mocked object. When the `notify` method in the `User`
class uses this object it will call the `sendMessage` method on the mock instead of a real `Mailer` object. In the test,
all that we're testing is that the `notify` method returns `true`. We're not verifying that the `sendMessage` method
is called at all.


```php
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mock_mailer);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
```

In addition to setting the returned value of a stubbed method we can set expectations on it. E.g. when calling the `notify`
method on a `User` object to make sure it is interacting with the `Mailer` object as expected. We want to know that the
`Mailer` `sendMessage` method has been called. We can do this by adding the `expects` method when we create and configure
the mock. The argument to this method is a matcher method that tells PHPUnit how many times to expect the method call. E.g.
the `once()` matcher expects the method to be called only once. There are other matcher methods available.

```php
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mock_mailer);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
```

We can also set expectations on the values that are passed as arguments to the stub method using the `with()` method.
The number of arguments to this method will match the number of arguments to the stubbed method, and again we use matches
to describe the expected values that should be passed.

```php
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('dave@example.com'), $this->equalTo('Hello'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
```

In addition to the `equalTo` matcher method there are several others that are not found in the PHPUnit docs but they are
in the PHPUnit source code.

### Customise the creation of the mock object: the getMockBuilder method

We just used the `createMock` method to create a mock object, so we could test the `User` class without relying on a real
`Mailer` object. This mock object has all its public methods stubbed so the original code is replaced, and they all
return `null`, although we can override the value being returned using the `willReturn` method.

There may be a case where you don't want to stub out an original method and want the original code to run. Let's look
at an example.

Let's throw an exception in the `Mailer` class `sendMessage` method if the email is empty. In practice, you would add
your own exception class, but we will keep it simple with a standard one.

```php
<?php

class Mailer
{
    /**
     * @param $email
     * @param $message
     * @return true
     * @throws Exception
     */

	public function sendMessage($email, $message): true
    {
        if (empty($email))
        {
            throw new Exception();
        }

		sleep(3);
		echo "Send '$message' to '$email'";

		return true;
	}
}
```

In the `UserTest` class we'll add a new test method to test that an exception is thrown if we try and notify a user
that does not have an email.

```php
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->createMock(Mailer::class);
        $user->setMailer($mock_mailer);

        // We haven't set the email address seo we expect an
        // exception to be thrown
        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
```

When we run the above we get a failure because no exception was thrown. This is because when we create a mock object using
the `createMock` method all the methods are stubbed so the stubbed methods have no content and just returns `null`. One
way to fix the test would be to configure the mock object's `sendMessage` method to throw an exception in a similar way
that we can set what the return value is.

```php
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->createMock(Mailer::class);

        // We set the method to throw an exception
        $mock_mailer->method('sendMessage')
                    ->will($this->throwException(new Exception()));

        $user->setMailer($mock_mailer);

        // We haven't set the email address seo we expect an
        // exception to be thrown
        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
```

Now when running the tests they pass. However, by doing this we are just duplicating the code in the original method. It
would be better if the mock used the original method if all it is going to do is to throw an exception.

Instead of using the `createMock` method we can use the `getMockBuilder` method calling the `getMock` method on it to get
the actual mock object.

By using `getMockBuilder` we can customize the mock object that is generated. There are methods to specify the methods that
are replaced, to specify those that aren't, to disable the constructor of the original object, etc.

```php
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->onlyMethods([])
                            ->getMock();

        $user->setMailer($mock_mailer);

        // We haven't set the email address seo we expect an
        // exception to be thrown
        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
```

Another option is to pass in an array containing the names of the methods that will be stubbed, e.g.

```php
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->onlyMethods(['sendMessage'])
                            ->getMock();

        $user->setMailer($mock_mailer);

        // We haven't set the email address seo we expect an
        // exception to be thrown
        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
```

You would use this method if you only want to stub some methods from the original object. In this case we will just
do with an empty array so that none of these methods are stubbed.

By using `getMockBuilder` we have full control over the mock object that we create. If you're happy with the defaults
created by `createMock` you can keep it simple and use that instead.