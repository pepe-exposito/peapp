<?php

namespace App\Factory;

use App\Entity\Recaudacion;
use App\Repository\RecaudacionRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Recaudacion>
 *
 * @method        Recaudacion|Proxy create(array|callable $attributes = [])
 * @method static Recaudacion|Proxy createOne(array $attributes = [])
 * @method static Recaudacion|Proxy find(object|array|mixed $criteria)
 * @method static Recaudacion|Proxy findOrCreate(array $attributes)
 * @method static Recaudacion|Proxy first(string $sortedField = 'id')
 * @method static Recaudacion|Proxy last(string $sortedField = 'id')
 * @method static Recaudacion|Proxy random(array $attributes = [])
 * @method static Recaudacion|Proxy randomOrCreate(array $attributes = [])
 * @method static RecaudacionRepository|RepositoryProxy repository()
 * @method static Recaudacion[]|Proxy[] all()
 * @method static Recaudacion[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Recaudacion[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Recaudacion[]|Proxy[] findBy(array $attributes)
 * @method static Recaudacion[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Recaudacion[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class RecaudacionFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'cantidad' => self::faker()->randomNumber(),
            'fecha' => self::faker()->dateTime(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Recaudacion $recaudacion): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Recaudacion::class;
    }
}
