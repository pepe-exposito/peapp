<?php

namespace App\Factory;

use App\Entity\Cliente;
use App\Repository\ClienteRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Cliente>
 *
 * @method        Cliente|Proxy create(array|callable $attributes = [])
 * @method static Cliente|Proxy createOne(array $attributes = [])
 * @method static Cliente|Proxy find(object|array|mixed $criteria)
 * @method static Cliente|Proxy findOrCreate(array $attributes)
 * @method static Cliente|Proxy first(string $sortedField = 'id')
 * @method static Cliente|Proxy last(string $sortedField = 'id')
 * @method static Cliente|Proxy random(array $attributes = [])
 * @method static Cliente|Proxy randomOrCreate(array $attributes = [])
 * @method static ClienteRepository|RepositoryProxy repository()
 * @method static Cliente[]|Proxy[] all()
 * @method static Cliente[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Cliente[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Cliente[]|Proxy[] findBy(array $attributes)
 * @method static Cliente[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Cliente[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ClienteFactory extends ModelFactory
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
            'dni' => self::faker()->text(9),
            'email' => self::faker()->text(100),
            'nombre' => self::faker()->text(100),
            'primer_apellido' => self::faker()->text(100),
            'segundo_apellido' => self::faker()->text(100),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Cliente $cliente): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Cliente::class;
    }
}
