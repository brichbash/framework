<?php

namespace Illuminate\Testing\Fluent\Concerns;

use JetBrains\PhpStorm\NoReturn;

trait Debugging
{
    /**
     * Dumps the given props.
     *
     * @param  string|null  $prop
     * @return $this
     */
    public function dump(string $prop = null): self
    {
        dump($this->prop($prop));

        return $this;
    }

    /**
     * Dumps the given props and exits.
     *
     * @param  string|null  $prop
     * @return never
     */
    #[NoReturn] public function dd(string $prop = null): void
    {
        dd($this->prop($prop));
    }

    /**
     * Retrieve a prop within the current scope using "dot" notation.
     *
     * @param  string|null  $key
     * @return mixed
     */
    abstract protected function prop(string $key = null);
}
