<?hh

function generator() {
  yield 42;
}

async function foo() {
  foreach (generator() await as $value) {
    echo "$value\n";
  }
}

foo()->join();
