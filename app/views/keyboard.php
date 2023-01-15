<?php

namespace LibrarianApp;

use Exception;
use Librarian\Html\Bootstrap as Bootstrap;
use Librarian\Mvc\TextView;

class KeyboardView extends TextView {

    /**
     * Main.
     *
     * @return string
     * @throws Exception
     */
    public function main(): string {

        /** @var Bootstrap\Pills $el */
        $el = $this->di->get('Pills');

        $el->id('keyboard-header');
        $el->addClass("mx-1");
        $el->item($this->lang->t9n('Arrows'), 'keyboard-arrows');
        $el->item($this->lang->t9n('Currency'), 'keyboard-currency');
        $el->item($this->lang->t9n('Greek'), 'keyboard-greek', true);
        $el->item($this->lang->t9n('Latin'), 'keyboard-latin');
        $el->item($this->lang->t9n('Math symbols'), 'keyboard-math');
        $el->item($this->lang->t9n('Math operators'), 'keyboard-math2');
        $el->item($this->lang->t9n('Superscripts and subscripts'), 'keyboard-super');
        $el->item($this->lang->t9n('Technical'), 'keyboard-technical');
        $el->item($this->lang->t9n('Other'), 'keyboard-other');
        $header = $el->render();

        $el = null;

        $arrows_content = '';

        $btn_class = self::$theme === 'dark' ? 'btn-dark' : 'btn-light';

        for ($i = 8592; $i <= 8703; $i++) {

            $arrows_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 10224; $i <= 10239; $i++) {

            $arrows_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 10496; $i <= 10623; $i++) {

            $arrows_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $currency_content = '';
        $chars = [36, 162, 163, 164, 165, 402, 1423, 2546, 2547, 2801, 3065, 3647, 6107, 20803, 20870, 22278, 22286,
            22291, 22300, 65020, 65284, 65504, 65505, 65509, 65510];

        foreach ($chars as $char) {

            $currency_content .= '<div class="btn ' . $btn_class . '">&#' . $char . ';</div>';
        }

        for ($i = 8352; $i <= 8378; $i++) {

            $currency_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $greek_content = '';

        for ($i = 880; $i <= 887; $i++) {

            $greek_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 890; $i <= 894; $i++) {

            $greek_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 900; $i <= 906; $i++) {

            $greek_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $greek_content .= '<div class="btn ' . $btn_class . '">&#908;</div>';

        for ($i = 910; $i <= 929; $i++) {

            $greek_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 931; $i <= 1023; $i++) {

            $greek_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $latin_content = '';

        for ($i = 192; $i <= 591; $i++) {

            $latin_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $math_content = '';

        for ($i = 119808; $i <= 119892; $i++) {

            $math_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 119894; $i <= 120485; $i++) {

            $math_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 120488; $i <= 120779; $i++) {

            $math_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 120782; $i <= 120831; $i++) {

            $math_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $math2_content = '';

        $math2_content .= '<div class="btn ' . $btn_class . '">&#172;</div>';
        $math2_content .= '<div class="btn ' . $btn_class . '">&#177;</div>';

        for ($i = 8704; $i <= 8959; $i++) {

            $math2_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 10176; $i <= 10223; $i++) {

            $math2_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 10624; $i <= 11007; $i++) {

            $math2_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $super_content = '';

        for ($i = 8304; $i <= 8305; $i++) {

            $super_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $super_content .= '<div class="btn ' . $btn_class . '">&#185;</div>';
        $super_content .= '<div class="btn ' . $btn_class . '">&#178;</div>';
        $super_content .= '<div class="btn ' . $btn_class . '">&#179;</div>';

        for ($i = 8308; $i <= 8334; $i++) {

            $super_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 8336; $i <= 8348; $i++) {

            $super_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $technical_content = '';

        for ($i = 8960; $i <= 9203; $i++) {

            $technical_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $other_content = '';

        for ($i = 134; $i <= 135; $i++) {

            $other_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        $other_content .= '<div class="btn ' . $btn_class . '">&#137;</div>';
        $other_content .= '<div class="btn ' . $btn_class . '">&#151;</div>';
        $other_content .= '<div class="btn ' . $btn_class . '">&#153;</div>';
        $other_content .= '<div class="btn ' . $btn_class . '">&#169;</div>';
        $other_content .= '<div class="btn ' . $btn_class . '">&#174;</div>';

        for ($i = 8448; $i <= 8585; $i++) {

            $other_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        for ($i = 188; $i <= 190; $i++) {

            $other_content .= '<div class="btn ' . $btn_class . '">&#' . $i . ';</div>';
        }

        /** @var Bootstrap\NavContent $el */
        $el = $this->di->get('NavContent');

        $el->addClass("mx-1");
        $el->tab($arrows_content, 'keyboard-arrows');
        $el->tab($currency_content, 'keyboard-currency');
        $el->tab($greek_content, 'keyboard-greek', true);
        $el->tab($latin_content, 'keyboard-latin');
        $el->tab($math_content, 'keyboard-math');
        $el->tab($math2_content, 'keyboard-math2');
        $el->tab($super_content, 'keyboard-super');
        $el->tab($technical_content, 'keyboard-technical');
        $el->tab($other_content, 'keyboard-other');
        $tabs = $el->render();

        $el = null;

        $html = <<<KEYBOARD
            <div id="keyboard">
                $header
                $tabs
            </div>
KEYBOARD;

        /** @var Bootstrap\Icon $el */
        $el = $this->di->get('Icon');

        $el->icon('close');
        $close = $el->render();

        $el = null;

        $card_class = self::$theme === 'light' ? 'bg-light' : '';

        /** @var Bootstrap\Card $el */
        $el = $this->di->get('Card');

        $el->id('keyboard-window');
        $el->addClass("d-none d-lg-block {$card_class}");
        $el->header(<<<EOT
            <b class="text-uppercase">{$this->lang->t9n('Extended keyboard')}</b>
            <button type="button" class="close" aria-label="Close">
                $close
            </button>
EOT
        );
        $el->body($html);
        $keyboard = $el->render();

        $el = null;

        $this->append(['html' => $keyboard]);

        return $this->send();
    }
}
