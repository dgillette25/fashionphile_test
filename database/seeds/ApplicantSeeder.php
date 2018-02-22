<?php

use Illuminate\Database\Seeder;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{
          "id": 1,
          "name": "Russ Waters",
          "email": "torrance@brekke.co.uk",
          "website": "http:\/\/kihn.info",
          "cover_letter": "Vel magnam ut reprehenderit molestiae maiores tempore enim ea. Ad est ut amet explicabo debitis consectetur sapiente. Aut quis enim magni eum ab quaerat.",
          "job_id": 1,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 2,
          "name": "Dakota Kautzer",
          "email": "stella.cartwright@quitzonmarquardt.info",
          "website": "http:\/\/oconnellboyer.ca",
          "cover_letter": "Fuga fugit quasi ut error culpa dolor id necessitatibus. Aperiam expedita ab adipisci. Laborum labore tenetur et autem in praesentium officia. Occaecati rerum autem recusandae eaque nam. Eaque corporis quis praesentium.",
          "job_id": 1,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 3,
          "name": "Miss Cortez Hilpert",
          "email": "adan@dooleykshlerin.co.uk",
          "website": "http:\/\/wisozk.us",
          "cover_letter": "Pariatur molestias harum molestiae nihil voluptatibus totam. Repudiandae ut explicabo enim. Quae illo voluptatem eum. Dolor hic explicabo rem. Dolores sequi et id nesciunt tempora quae.",
          "job_id": 1,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 4,
          "name": "Katarina Mills",
          "email": "cathrine@leschhettinger.ca",
          "website": "http:\/\/feestrempel.ca",
          "cover_letter": "Sed ea aut pariatur ad assumenda. Est libero quo veritatis cupiditate. Voluptatem non qui sed velit ipsum delectus aut eligendi. Dolorem eos et et ipsum sit facilis.",
          "job_id": 1,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 5,
          "name": "Jordane Hilll IV",
          "email": "meredith@morarprice.uk",
          "website": "http:\/\/kriskuhlman.us",
          "cover_letter": "Ab porro nemo quam nesciunt. Necessitatibus asperiores labore quos. Veritatis recusandae omnis asperiores velit et consectetur est. Eligendi reprehenderit eius earum sed ratione asperiores quis. Accusamus rem asperiores aut autem.",
          "job_id": 2,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 6,
          "name": "Kraig Oga",
          "email": "maribel@kochstrosin.name",
          "website": "http:\/\/kassulke.ca",
          "cover_letter": "Aliquid aspernatur dolores sequi eum dignissimos sit ea. Et incidunt eveniet consequatur eligendi et aut. Nihil voluptas iusto enim recusandae. Suscipit iste facere placeat et ducimus. Distinctio ut adipisci rerum optio officia.",
          "job_id": 2,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 7,
          "name": "Hilbert Price",
          "email": "yasmine.hoppe@mclaughlin.biz",
          "website": "http:\/\/beahan.info",
          "cover_letter": "Omnis ut assumenda voluptates quisquam. Sed eum quia non culpa rem accusantium. Reiciendis sunt aut magnam. Adipisci repellat dicta consequatur sapiente non iste qui dolor.",
          "job_id": 2,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }, {
          "id": 8,
          "name": "Mikel Murazik",
          "email": "aletha@schowalter.info",
          "website": "http:\/\/nitzsche.uk",
          "cover_letter": "Quidem saepe consequatur qui ex vero officia unde rem. Aut quas veniam dolorem. Eligendi fugit harum aut delectus ad dolorem maiores. Qui labore praesentium consequuntur eum ut modi. Et animi asperiores quo reprehenderit sint excepturi.",
          "job_id": 2,
          "created_at": "2014-01-08 17:13:29",
          "updated_at": "2014-01-08 17:13:29"
        }]';

       	$applicants = json_decode($json);
       	foreach($applicants as $applicant) {
       		$new_object = new \App\Models\Applicant;
       		$new_object->fill((array)$applicant);
       		$new_object->save();
       	}
    }
}
