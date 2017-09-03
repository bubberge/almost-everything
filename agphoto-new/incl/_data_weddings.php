<?php
include '_func_gallery.php';
$data_weddings = [
    [
      "img/weddings/094-within-sodo-wedding-aebischer.jpg",
      "bride and groom enjoy a magical sparkler exit photo in seattle wedding photographer amy galbraith's photo",
      true
    ],
    [
      "img/weddings/001-seattle_wedding_photographer-portfolio_001.jpg",
      "a bride turns and gazes pensively toward the ground in her dressing room, revealing her vintage earrings",
      true
    ],
    [
      "img/weddings/004-seattle_wedding_photographer-rayachoti-001.jpg",
      "the hairdresser shields the brides faces and she applies hairspray",
      true
    ],
    [
      "img/weddings/005-seattle_wedding_photographer-tate-1.jpg",
      "a bridal gown is seen peeking out the upper window of a forest cottage",
      true
    ],
    [
      "img/weddings/006-seattle_wedding_photographer-lewis-2.jpg",
      "a close-up of a groom's hands nervously re-lacing his shoes as he gets ready before his wedding",
      false
    ],
    [
      "img/weddings/009-seattle_wedding_photographer-tate-7.jpg",
      "a groom provides comic relief as he stretches in the getting-ready room",
      false
    ],
    [
      "img/weddings/010-seattle-wedding-photographer-uddin.jpg",
      "a bride's beautifully beaded wedding dress is adjusted in seattle wedding photographer amy galbraith's photo",
      false
    ],
    [
      "img/weddings/011-seattle_wedding_photographer-clark-9.jpg",
      "in this seattle wedding phography momennt, a waist-down photograph of a bride displays the lace of her wedding gown and the sparkle of her engagement ring",
      false
    ],
    [
      "img/weddings/013-portland-wedding-photographer-piwowarski-001.jpg",
      "almost instinctively, a bride gazes at her engagement ring as she gets ready for her wedding ceremony. moment by seattle wedding photographer amy galbraith",
      false
    ],
    [
      "img/weddings/014-jackson_hole_wedding_photographer-sorensen-001.jpg",
      "mountain wedding photographer amy galbraight captures a photo of three boutineers (boutonnieres) as they lie in a row atop a worn wooden floor",
      false
    ],
    [
      "img/weddings/015-seattle_wedding_photographer-rayachoti-002.jpg",
      "fresh henna is displayed on the hands of a bride in a traditional indian wedding as captured by seattle wedding photographer Amy Galbraith",
      false
    ],
    [
      "img/weddings/016-leavenworth_wedding_photographer-jasinski-002.jpg",
      "this mountain wedding bride steals a quiet moment to herself as she gazes into the a mirror in the corner of a dark log cabin room",
      false
    ],
    [
      "img/weddings/018-seattle_wedding_photographer-kelly-001.jpg",
      "a bride wearing a green wedding dress holds her bouquet out to the camera for a close-up",
      false
    ],
    [
      "img/weddings/019-seattle_wedding_photographer-tate-4.jpg",
      "A groom enjoys a moment with his dog in this outdoor wedding photograph",
      false
    ],
    [
      "img/weddings/020-seattle_wedding_photographer-tate-5.jpg",
      "A groom takes a few minutes with his friends to have a beer just before beginning the wedding festivities",
      false
    ],
    [
      "img/weddings/021-seattle_wedding_photographer-jacobs_003.jpg",
      "A bride in a 1920's themed room sits and thinks quietly to herself as her eyes wander to the floor in this moment captured by Seattle Wedding photographer Amy Galbraith",
      false
    ],
    [
      "img/weddings/022-seattle-wedding-photographer-berry.jpg",
      "Bride and mother embrace in an intimate moment before the wedding ceremony",
      false
    ],
    [
      "img/weddings/023-seattle_wedding_photographer-rayachoti-003.jpg",
      "Seattle wedding photographer Amy Galbraith captures the moment that a jovial groom celebrates with the cheering crowd around him while seated on a huge white horse",
      false
    ],
    [
      "img/weddings/024-jackson_hole_wedding_photographer-rayachoti-001.jpg",
      "Mountain wedding photographer Amy Galbraith's photo of a bride gazing out the the Mormon Row barns as wind from an oncoming storm blows leaves at her feet. Jackson Hole, Wyoming",
      false
    ],
    [
      "img/weddings/025-seattle_wedding_photographer-tate-12.jpg",
      "While holding an umbrella to shield him from the rain, a groom looks nervous and excited as his bride sneaks up on him from behind",
      false
    ],
    [
      "img/weddings/026-seattle_wedding_photographer-lewis-4.jpg",
      "An excited groom reaches out behind himself to try to catch the hand of his bride as she comes to surprise him with their first look.",
      false
    ],
    [
      "img/weddings/027-seattle_wedding_photographer-jhaveri-001.jpg",
      "A bride's hands jump to her face to hold back tears of joy as she gets a first look at her husband on their wedding day. Captured by Seattle wedding photographer Amy Galbraith",
      false
    ],
    [
      "img/weddings/028-2-swiftwater-cellars-wedding-uddin.jpg",
      "The groom is awestruck by the sight of his bride in this mountain wedding photography moment",
      false
    ],
    [
      "img/weddings/028-woodinville_wedding_photographer-cummings_001.jpg",
      "A young bride laughs honestly as her husband gives her a kiss on the temple",
      false
    ],
    [
      "img/weddings/030-des-moines-beach-park-wedding-irish-001.jpg",
      "Bride and groom are alone on a beach in adventure wedding photographer amy galbraith's photograph",
      false
    ],
    [
      "img/weddings/031-pickering-barn-wedding-savery.jpg",
      "Bride and groom embrace on a country path in this outdoor wedding photograph",
      false
    ],
    [
      "img/weddings/032-seattle_wedding_photographer-portfolio_031.jpg",
      "in a backcountry wedding photography moment, bride and groom walk through the summertime ski slopes of Crystal Mountain",
      false
    ],
    [
      "img/weddings/033-bainbridge_island_wedding_photographer-mcclendon-001.jpg",
      "A bride and groom kiss on the shore of a quiet little cove in this Bainbridge Island wedding photograph",
      false
    ],
    [
      "img/weddings/034-snohomish_wedding_photographer-bailey-001.jpg",
      "bride and groom stand side by side on a train tressel as the bridge disappears into the forest",
      false
    ],
    [
      "img/weddings/035-jackson_hole_wedding_photographer-ingols-20.jpg",
      "bride and groom embrace as a blanket of cloud begins to pour into the valley",
      false
    ],
    [
      "img/weddings/036-seattle_wedding_photographer-portfolio_021.jpg",
      "bride and groom look away from the camera over icicle creek in this backcountry wedding photograph shot in leavenworth, wa",
      false
    ],
    [
      "img/weddings/037-jackson_hole_wedding_photographer-soto-1.jpg",
      "adventure wedding photographer amy galbraith's photo of a bride and groom walking along the snake river with the tetons looming high in the background, Jackson Hole, Wyoming",
      false
    ],
    [
      "img/weddings/040-seattle_wedding_photographer-clark-27.jpg",
      "groom hugs his bride as they walk through tall grass at a beach, semiahmoo, washington",
      false
    ],
    [
      "img/weddings/042-portland-wedding-photographer-piwowarski-002.jpg",
      "a couple looks disproportionately small as they kiss against the backdrop of Portland, Oregon in this photo by Seattle wedding photographer amy galbraith",
      false
    ],
    [
      "img/weddings/043-jackson_hole_wedding_photographer-portfolio-022.jpg",
      "a couple enjoys a private moment before their wedding ceremony as they ride a chairlift together to the top of the mountain in Grand Targhee, Wyoming ",
      false
    ],
    [
      "img/weddings/045-snohomish_wedding_photographer-bailey-002.jpg",
      "a bride walks down the railroad tracks while gingerly holding her bouquet",
      false
    ],
    [
      "img/weddings/047-leavenworth_wedding_photographer-betz-001-1.jpg",
      "a groom is framed by his groomsmen as they all smile and walk towards us in this adventure wedding photography moment",
      false
    ],
    [
      "img/weddings/049-jackson_hole_wedding_photographer-todd-001.jpg",
      "a groom and five groomsmen stand in provile as they chug a ceremonial can of beer before their mountain wedding",
      false
    ],
    [
      "img/weddings/050-jackson_hole_wedding_photographer-rayachoti-002.jpg",
      "a wedding party throws a huge pile of leaves in the air to celebrate the newlywed couple, Jackson Wyoming",
      false
    ],
    [
      "img/weddings/051-jackson_hole_wedding_photographer-piche-002.jpg",
      "framed by her six bridesmaids, a beautiful bride and her companions laugh together",
      false
    ],
    [
      "img/weddings/052-jackson_hole_wedding_photographer-portfolio-002.jpg",
      "a group of six groomsmen stand at ease and laugh at something off-camera to the right",
      false
    ],
    [
      "img/weddings/053-wisconsin_wedding_photographer-kastner-002.jpg",
      "A wedding party smiles and the photo is in perfect focus and exposure even though there's a lot of people",
      false
    ],
    [
      "img/weddings/054-seattle_wedding_photographer-board-001.jpg",
      "a wide view from the top of Crystal Mountain, Washington reveals a large wedding ceremony and a glimpse at the mountains beyond",
      false
    ],
    [
      "img/weddings/055-jackson_hole_wedding_photographer-portfolio-008.jpg",
      "a wide view of the Tetons with a barn in the foreground where a small wedding is being held",
      false
    ],
    [
      "img/weddings/056-seattle_wedding_photographer-jacobs-1.jpg",
      "a bride and her mother share an intimate moment as they wait for the bride to walk down the aisle",
      false
    ],
    [
      "img/weddings/057-seattle_wedding_photographer-tate-26.jpg",
      "a ring bearer almost loses his feet as he runs to chase a dog down the aisle",
      false
    ],
    [
      "img/weddings/058-2-winthrop-wedding-photographer-nichols.jpg",
      "A bride walks down the aisle with her parents in this mountain wedding photograph shot by mountain wedding photographer Amy Galbraith",
      false
    ],
    [
      "img/weddings/058-seattle_wedding_photographer-lewis-18.jpg",
      "father and daughter laugh and reminisce for a brief moment as they walk together down the aisle",
      false
    ],
    [
      "img/weddings/059-jackson_hole_wedding_photographer-rayachoti-004.jpg",
      "a couple gets married in front of the Tetons in this Jackson Hole wedding photo shot by mountain wedding photographer amy galbraith",
      false
    ],
    [
      "img/weddings/060-seattle_wedding_photographer-davis_001.jpg",
      "a wife-to-be jokes with her partner as they exchange vows in this wedding photo shot by seattle wedding photographer amy galbraith",
      false
    ],
    [
      "img/weddings/062-swiftwater-cellars-wedding-001.jpg",
      "as a bride reads her prepared vows to her partner, we steal a glance at the lovingly-crafted words on the paper she is reading",
      false
    ],
    [
      "img/weddings/064-wisconsin_wedding_photographer-kastner-003.jpg",
      "we look down the aisle at a couple kissing for the first time as husband and wife",
      false
    ],
    [
      "img/weddings/065-jackson_hole_wedding_photographer-brin-001.jpg",
      "elated newlyweds walk down the aisle towards the camera in this mountain wedding photograph shot at a jackson hole wedding",
      false
    ],
    [
      "img/weddings/066-turpin-meadows-wedding.jpg",
      "bride smiles at an emotional groom as they walk back down the aisle in this adventure wedding photograph shot my Amy Galbraith",
      false
    ],
    [
      "img/weddings/067-seattle_wedding_photographer-portfolio-027.jpg",
      "wife looks back and shares a laugh with her new husband as she leads them forward and out of the picture",
      false
    ],
    [
      "img/weddings/068-seattle_wedding_photographer-portfolio-028.jpg",
      "we look up at a seated groom as, laughing, he is hoisted into the air in a jewish wedding photography",
      false
    ],
    [
      "img/weddings/069-idaho_wedding_photographer-wallace-31.jpg",
      "two escaped chickens roam freely in front of the feet of a man and woman wearing wedding attire",
      false
    ],
    [
      "img/weddings/070-jackson_hole_wedding_photographer-harmon-11.jpg",
      "a mountain bride bends down to share a cute moment with her black lab, who looks lovingly up at his newly-married mama",
      false
    ],
    [
      "img/weddings/071-leavenworth_wedding_photographer-betz-002.jpg",
      "a close-up of some delicious looking cupcake-sized pies",
      false
    ],
    [
      "img/weddings/072-2-marble-calligraphy-name.jpg",
      "a detail photo of the marble seating arrangement tiles at a mountain wedding at Swiftwater Cellars, Cle Elum, Washington",
      false
    ],
    [
      "img/weddings/072-seattle_wedding_photographer-lewis-29.jpg",
      "bride and groom's rings looped over the stem of an apple, which came from a heirloom tree on the bride's grandparents' property",
      false
    ],
    [
      "img/weddings/073-leavenworth_wedding_photographer-betz-002-1.jpg",
      "oblivious to his surroundings, a young wedding guest is overjoyed at first sight of the delicious wedding cake",
      false
    ],
    [
      "img/weddings/074-jackson_hole_wedding_photographer-piche-001.jpg",
      "in this mountain wedding photograph, a bride and groom kiss at the behest of their guests' clinking",
      false
    ],
    [
      "img/weddings/075-idaho_wedding_photographer-wallace-33.jpg",
      "bride's mother and her three sisters enjoy a laugh at an idaho mountain wedding reception",
      false
    ],
    [
      "img/weddings/077-snohomish_wedding_photographer-bailey-006.jpg",
      "a large group of young wedding quests selfies with their adventure wedding couple in the background. Hidden Meadows, Snohomish",
      false
    ],
    [
      "img/weddings/078-jm-cellars-wedding-cummings.jpg",
      "parents of the bride and groom cheer their children in what is one of the greatest days of their lives",
      false
    ],
    [
      "img/weddings/079-seattle_wedding_photographer-lewis-36.jpg",
      "ignoring the world around them, the groom leads the bride through their first dance",
      false
    ],
    [
      "img/weddings/080-swiftwater-cellars-wedding-uddin.jpg",
      "bride and groom share an intimate first dance while their guests look on in this mountain wedding photograph taken a Swiftwater Cellars, Cle Elum, WA",
      false
    ],
    [
      "img/weddings/081-snohomish_wedding_photographer-bailey-005.jpg",
      "a stunning panorama features only a bride and groom in the midst of a vast field in this Hidden Meadows wedding photograph",
      false
    ],
    [
      "img/weddings/082-wisconsin_wedding_photographer-kastner-001.jpg",
      "bride and groom kiss amoung the grape vines",
      false
    ],
    [
      "img/weddings/083-des-moines-beach-park-wedding-irish.jpg",
      "bride and groom embrace in a beachfront wedding photo taken at sunset by mountain wedding photographer amy galbraith",
      false
    ],
    [
      "img/weddings/084-jackson-hole-wedding-photographer-piche-002.jpg",
      "a bride laughs heartily as her groom sweeps her off of her feet and carries her through the waist-high grass in this adventure wedding photograph",
      false
    ],
    [
      "img/weddings/085-winthrop-wedding-photographer-nichols.jpg",
      "Bride and groom share a pensive moment in this mountain wedding photograph",
      false
    ],
    [
      "img/weddings/086-jackson_hole_wedding_photographer-todd-003.jpg",
      "adventure wedding photographer Amy Galbraith's photo of a groom dipping his bride in front of sheep mountain (sleeping indian) in jackson hole, wyoming",
      false
    ],
    [
      "img/weddings/087-jackson_hole_wedding_photographer-harmon-1.jpg",
      "bride and groom stand in a magical, wild field in this jackson hole wedding photography moment",
      false
    ],
    [
      "img/weddings/088-swiftwater-cellars-wedding-003.jpg",
      "bride and groom take a quiet moment to reflect on their wedding day as they gaze into the flames",
      false
    ],
    [
      "img/weddings/089-idaho_wedding_photographer-wallace-41.jpg",
      "mountain bride and groom dance with sparklers in the growing dark",
      false
    ],
    [
      "img/weddings/092-leavenworth_wedding_photographer-jasinski-003.jpg",
      "bride and groom alone on the dancefloor at the end of the night in this mountain wedding photograph",
      false
    ],
    [
      "img/weddings/093-seattle_wedding_photographer-mcclendon_001.jpg",
      "bride and groom kiss in the pouring rain in seattle wedding photographer amy galbraith's photo",
      true
    ]
  ];
