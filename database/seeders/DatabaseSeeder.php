<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MpVerstkaHtmlTheme;
use App\Models\MpVerstkaHtmlWork;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MpVerstkaHtmlTheme::factory()->create([
            'name' => 'Тема 1: Знакомство с HTML, структура HTML-документа'
        ]);
        MpVerstkaHtmlTheme::factory()->create([
            'name' => 'Тема 2: Разметка текста'
        ]);
        MpVerstkaHtmlTheme::factory()->create([
            'name' => 'Тема 3: Ссылки и изображения'
        ]);
        MpVerstkaHtmlTheme::factory()->create([
            'name' => 'Тема 4: Таблицы'
        ]);
        MpVerstkaHtmlTheme::factory()->create([
            'name' => 'Тема 5: Формы'
        ]);

        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №1.1',
            'uri' => 'p1-1',
            'title' => '',
            'mp_verstka_html_theme_id' => '1',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №2.1',
            'uri' => 'p2-1',
            'title' => '',
            'mp_verstka_html_theme_id' => '2',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №2.2',
            'uri' => 'p2-2',
            'title' => '',
            'mp_verstka_html_theme_id' => '2',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №2.3',
            'uri' => 'p2-3',
            'title' => '',
            'mp_verstka_html_theme_id' => '2',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №2.4',
            'uri' => 'p2-4',
            'title' => '',
            'mp_verstka_html_theme_id' => '2',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Проверка знаний',
            'uri' => 'check-of-knowledge2',
            'title' => '',
            'mp_verstka_html_theme_id' => '2',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №3.1',
            'uri' => 'p3-1',
            'title' => '',
            'mp_verstka_html_theme_id' => '3',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №3.2',
            'uri' => 'p3-2',
            'title' => '',
            'mp_verstka_html_theme_id' => '3',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Проверка знаний',
            'uri' => 'check-of-knowledge3',
            'title' => '',
            'mp_verstka_html_theme_id' => '3',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Итоговая практическая работа №1',
            'uri' => 'final-p1',
            'title' => '',
            'mp_verstka_html_theme_id' => '3',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №4.1',
            'uri' => 'p4-1',
            'title' => '',
            'mp_verstka_html_theme_id' => '4',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №4.2',
            'uri' => 'p4-2',
            'title' => '',
            'mp_verstka_html_theme_id' => '4',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Проверка знаний',
            'uri' => 'check-of-knowledge4',
            'title' => '',
            'mp_verstka_html_theme_id' => '4',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №5.1',
            'uri' => 'p5-1',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №5.2',
            'uri' => 'p5-2',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Практическая работа №5.3',
            'uri' => 'p5-3',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Проверка знаний',
            'uri' => 'check-of-knowledge5',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Итоговая практическая работа №2',
            'uri' => 'final-p2',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);
        MpVerstkaHtmlWork::factory()->create([
            'name' => 'Дополнение',
            'uri' => 'addition',
            'title' => '',
            'mp_verstka_html_theme_id' => '5',
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
