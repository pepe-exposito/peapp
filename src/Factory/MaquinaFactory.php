<?php

namespace App\Factory;

use App\Entity\Maquina;
use App\Repository\MaquinaRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Maquina>
 *
 * @method        Maquina|Proxy create(array|callable $attributes = [])
 * @method static Maquina|Proxy createOne(array $attributes = [])
 * @method static Maquina|Proxy find(object|array|mixed $criteria)
 * @method static Maquina|Proxy findOrCreate(array $attributes)
 * @method static Maquina|Proxy first(string $sortedField = 'id')
 * @method static Maquina|Proxy last(string $sortedField = 'id')
 * @method static Maquina|Proxy random(array $attributes = [])
 * @method static Maquina|Proxy randomOrCreate(array $attributes = [])
 * @method static MaquinaRepository|RepositoryProxy repository()
 * @method static Maquina[]|Proxy[] all()
 * @method static Maquina[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Maquina[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Maquina[]|Proxy[] findBy(array $attributes)
 * @method static Maquina[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Maquina[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class MaquinaFactory extends ModelFactory
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
            'nombre' => self::faker()->text(100),
            'tipo' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Maquina $maquina): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Maquina::class;
    }
}
