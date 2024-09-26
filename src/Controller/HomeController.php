<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        //Nom du fichier à  ouvrir
        //$fichier = file("pages.txt");
        // Nombre total de ligne du fichier
        //$total = count($fichier);
        $urls = [
            'https://www.goatfundedtrader.com/',
            'https://goatfundedtrader.com/pricing/',
            'https://goatfundedtrader.com/faqs/',
            'https://goatfundedtrader.com/about-us/',
            'https://goatfundedtrader.com/contact-us/',
            'https://goatfundedtrader.com/privacy-policy/',
            'https://goatfundedtrader.com/terms-and-conditions/',
            'https://goatfundedtrader.com/funded-account-disclaimer/',
            'https://goatfundedtrader.com/refund-policy/',
            'https://goatfundedtrader.com/payouts/',
            'https://goatfundedtrader.com/payouts/?pg=1&limit=2000',
            'https://goatfundedtrader.com/blog/',
            'https://goatfundedtrader.com/supply-and-demand-theory-of-price-action/',
            'https://goatfundedtrader.com/what-style-of-trading-is-the-best/',
            'https://goatfundedtrader.com/scalping-in-forex-trading/',
            'https://goatfundedtrader.com/position-sizing-in-forex/',
            'https://goatfundedtrader.com/importance-of-risk-to-reward-ratio-in-trading/',
            'https://goatfundedtrader.com/volume-in-forex-and-its-importance/',
            'https://goatfundedtrader.com/importance-of-demo-trading-in-forex/',
            'https://goatfundedtrader.com/7-common-forex-trading-mistakes-to-avoid/',
            'https://goatfundedtrader.com/what-is-a-good-trading-plan/',
            'https://goatfundedtrader.com/harnessing-the-power-of-quantitative-analysis-and-machine-learning-in-forex-trading/',
            'https://goatfundedtrader.com/unleashing-the-power-and-peril-of-leverage-in-forex-trading/',
            'https://goatfundedtrader.com/how-big-bank-decisions-move-our-money/',
            'https://goatfundedtrader.com/the-role-of-major-currency-pairs-in-forex-trading-an-in-depth-analysis/',
            'https://goatfundedtrader.com/11182/',
            'https://goatfundedtrader.com/mastering-the-forex-symphony-orchestrating-economic-notes-market-moods/',
            'https://goatfundedtrader.com/prop-traders-and-the-strategic-use-of-algorithmic-trading/',
            'https://goatfundedtrader.com/news-trading-in-forex/',
            'https://goatfundedtrader.com/risk-vs-reward-maintaining-balance-is-crucial-in-forex-trading/',
            'https://goatfundedtrader.com/the-role-of-the-central-bank-in-the-forex-market/',
            'https://goatfundedtrader.com/major-minor-and-exotic-pairs-in-forex/',
            'https://goatfundedtrader.com/forex-trading-myths/',
            'https://goatfundedtrader.com/currency-correlations-diversification-in-forex-trading/',
            'https://goatfundedtrader.com/understanding-leverage-in-the-forex-market-a-double-edged-sword/',
            'https://goatfundedtrader.com/how-to-avoid-slippage-in-forex-trading/',
            'https://goatfundedtrader.com/a-guide-to-learn-candlestick-patterns/',
            'https://goatfundedtrader.com/how-does-fundamental-analysis-help-forex-traders/',
            'https://goatfundedtrader.com/how-to-avoid-losing-a-funded-account/',
            'https://goatfundedtrader.com/role-of-an-economic-calendar-in-forex-trading/',
            'https://goatfundedtrader.com/7-winning-strategies-in-forex-trading/',
            'https://goatfundedtrader.com/mastering-the-art-of-forex-scalping-strategies-and-tips-for-success/',
            'https://goatfundedtrader.com/amet-consectetur-adipi-cing-eliti-suspendisse/',
            'https://goatfundedtrader.com/goat-funded-trader-lot-size-calculator/',
            'https://goatfundedtrader.com/goat-funded-trader-account-review/',
            'https://goatfundedtrader.com/weekly-market-report-monday-september-2nd-2024-to-friday-september-6th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-august-26th-2024-to-friday-august-30th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-july-29th-2024-to-friday-august-2nd-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-july-22nd-2024-to-friday-july-26th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-july-15th-2024-to-friday-july-19th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-july-8th-2024-to-friday-july-12th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-july-1st-2024-to-friday-july-5th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-june-24th-2024-to-friday-june-28th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-june-3rd-2024-to-friday-june-7th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-may-20th-2024-to-friday-may-24th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-may-6th-2024-to-friday-may-10th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-april-29th-2024-to-friday-may-3rd-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-april-22nd-2024-to-friday-april-26th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-april-15th-2024-to-friday-april-19th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-april-8th-to-friday-april-12th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-february-25th-2024-to-friday-march-29th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-march-18th-2024-to-friday-march-22nd-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-march-11th-2024-to-friday-march-15th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-march-4th-2024-to-friday-march-8th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-february-26th-2024-to-friday-march-1st-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-february-12th-2024-to-friday-february-16th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-february-5th-2024-to-friday-february-9th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-january-29th-2023-to-friday-february-2nd-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-january-22nd-2023-to-friday-january-26th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-january-15th-2023-to-friday-january-19th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-january-8th-2023-to-friday-january-12th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-january-1st-2024-to-friday-january-5th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-december-25th-2023-to-friday-december-29th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-december-18th-2023-to-friday-december-22nd-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-december-11th-2023-to-friday-december-15th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-december-4th-2023-to-friday-december-8th-2023/',
            'https://goatfundedtrader.com/weekly-market-report-monday-27th-november-2023-to-friday-december-1st-2023/',
            'https://goatfundedtrader.com/market-weekly-report-20th-monday-2023-to-24th-friday-2023/',
            'https://goatfundedtrader.com/prop-firms-vs-brokers/',
            'https://goatfundedtrader.com/how-to-select-the-best-prop-firm-based-on-your-trading-style/',
            'https://goatfundedtrader.com/weekly-market-report-monday-august-5th-2024-to-friday-august-9th-2024/',
            'https://goatfundedtrader.com/algorithmic-theory-of-price-action/',
            'https://goatfundedtrader.com/top-10-books-every-forex-trader-should-read/',
            'https://goatfundedtrader.com/futures-market-vs-forex-market/',
            'https://goatfundedtrader.com/why-do-most-traders-fail-their-prop-firm-challenges/',
            'https://goatfundedtrader.com/interview-10/',
            'https://goatfundedtrader.com/weekly-market-report-monday-april-1st-2024-to-friday-april-5th-2024/',
            'https://goatfundedtrader.com/weekly-market-report-monday-february-19th-2024-to-friday-february-23rd-2024/',
            'https://goatfundedtrader.com/the-effects-of-emotions-on-trading/',
            'https://goatfundedtrader.com/what-is-swing-trading-2/',
            'https://goatfundedtrader.com/forex-trading-sessions/',
            'https://goatfundedtrader.com/what-is-swing-trading/',
            'https://goatfundedtrader.com/all-you-need-to-know-about-margin-calls/',
            'https://goatfundedtrader.com/the-importance-of-fundamentals-in-forex-trading/',
            'https://goatfundedtrader.com/the-importance-of-psychology-in-trading/',
            'https://goatfundedtrader.com/financial-crisis-and-the-actual-situations/',
            'https://goatfundedtrader.com/long-term-vs-short-term-forex-investment-pros-and-cons/',
            'https://goatfundedtrader.com/the-impact-of-the-pandemic-2020-on-the-forex-market-especially-in-the-u-s/',
            'https://goatfundedtrader.com/interview-13/',
            'https://goatfundedtrader.com/interview-12/',
            'https://goatfundedtrader.com/interview-11/',
            'https://goatfundedtrader.com/the-nurse-turned-trader/',
            'https://goatfundedtrader.com/interview-9/',
            'https://goatfundedtrader.com/interviw-8/',
            'https://goatfundedtrader.com/interview-7/',
            'https://goatfundedtrader.com/keiths-journey-from-student-to-forex-trader/',
            'https://goatfundedtrader.com/interview-5/',
            'https://goatfundedtrader.com/interview4/',
            'https://goatfundedtrader.com/interview-3/',
            'https://goatfundedtrader.com/interview-2/',
            'https://goatfundedtrader.com/goatfundedtrader-interview-1-a-beacon-of-transparency-in-proprietary-trading/',
            'https://goatfundedtrader.com/introducing-the-goat-fidelity-program-a-token-of-appreciation-for-our-loyal-clients/',
            'https://goatfundedtrader.com/fusce-suscipit-purus-ut-le-o-blandit-viverra-inter/',
            'https://goatfundedtrader.com/amet-consectetur-adipi-cing-eliti-suspendisse-3/',
            'https://goatfundedtrader.com/amet-consectetur-adipi-cing-eliti-suspendisse-2/',
            'https://goatfundedtrader.com/scaling-plan/',
            'https://goatfundedtrader.com/tool/',
            'https://goatfundedtrader.com/affiliate-area/',
            'https://goatfundedtrader.com/become-an-affiliate/',
            'https://app.goatfundedtrader.com/login',
            'https://app.goatfundedtrader.com/register',
        ];
        $lien = '';
        $code = 0;
        for ($i = 0; $i < count($urls); $i++) {
            // On affiche ligne par ligne le contenu du fichier
            // avec la fonction nl2br pour ajouter les sauts de lignes
            //echo nl2br($fichier[$i]);
            //$url = ($fichier[$i]);

            $page = file_get_contents($urls[$i]);
            //$page = file_get_contents($fichier[$i]);
            if (stristr($page, '🐐') == true) {
                $code = 2;
                //$lieu = str_replace('🐐', '<em id="itachi223" class="btn btn-primary btn-lg" name="itachi223">ICI ICI</em>🐐', $page);

                $lien = $urls[$i];
                //echo $lieu;
                break;
            }
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'code' => $code,
            'lien' => $lien,
            //'lieu' => $lieu,
        ]);
    }
    public function disparu(string $page)
    {
        $disparu = false;
        $page = file_get_contents($page);
        if (stristr($page, '🐐') == true) {
            $disparu = false;
        } else {
            $disparu = true;
        }
        return $disparu;
    }
}
