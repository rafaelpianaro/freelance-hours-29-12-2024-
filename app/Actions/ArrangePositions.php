<?php

namespace App\Actions;

use App\Models\Proposal;
use Illuminate\Support\Facades\DB;

class ArrangePositions
{
    public static function run(int $projectId)
    {
        // pega as propostas do projeto, ordenadas por hours
        $proposals = Proposal::where('project_id', $projectId)
            ->orderBy('hours', 'asc')
            ->get();

        // array para as atualizações
        $updates = [];
        foreach ($proposals as $index => $proposal) {
            $updates[$proposal->id] = ['position' => $index + 1];
        }

        // atualização em massa usando múltiplas queries
        foreach ($updates as $id => $data) {
            Proposal::where('id', $id)->update($data);
        }

        // DB::update('
        // with RankedProposals as (
        //     select id, row_number() over(order by hours asc) as p
        //     from proposals
        //     where project_id = :project
        // )
        // update proposals
        // set position = (select p from RankedProposals where proposals.id = RankedProposals.id)
        // where project_id = :project', ['project' => $id]);
    }
}
