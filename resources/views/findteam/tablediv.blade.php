
        <div class="block" id="data-table-div">
            <div class="block-header">

            </div>
            <div class="block-content">
                <div class="block">
                    <div class="block-content">
                        <table class="table table-bordered table-striped table-condensed table-hover js-dataTable-full dataTable no-footer table-header-bg" id="DataTables_Table_1" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="hidden-sm hidden-xs" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">Name</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Type: activate to sort column ascending" style="width: 50px;">Feel</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 100px;">Tempo</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 100px;">Off</th>
                                    <th class="hidden-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 50px;">Def</th>
                                    <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Team Grade: activate to sort column ascending">Team</th>
                                    <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Skill Grade: activate to sort column ascending">Skill</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">PER</th>
                                    <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">FG%</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">APG</th>
                                    <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">A/P</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">PPG</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">RPG</th>
                                    <th class="text-center sorting_disabled" style="width: 40px;" rowspan="1" colspan="1" aria-label="Actions">Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                    @if( (($team->type == 'Pro-Am Team') OR in_array($team->affiliation, $search_affiliation_type)) AND in_array($team->type, $search_type) AND in_array($team->tempo, $search_tempo)
                                        AND in_array($team->offense, $search_offense) AND in_array($team->movement, $search_movement) AND in_array($team->defense, $search_defense)
                                        AND in_array($team->num_players, $search_members))
                                        <tr role="row" @if ($team->id & 1) class="odd" @else class="even" @endif>
                                            <td class="hidden-sm hidden-xs font-w600"><a href="/team/{{$team->name}}">{{ $team->name }}</a></td>
                                            <td class="hidden-xs">{{ $team->movement }}</td>
                                            <td class="hidden-xs">{{ $team->tempo}}</td>
                                            <td class="">{{ $team->offense }}</td>
                                            <td class="hidden-md">{{ $team->defense }}</td>
                                            <td class="center">
                                                <h3 class="text-{{$team->team_grade_color}} table-font">{{ $team->team_grade }}</h3>
                                            </td>
                                            <td class="center">
                                                <h3 class="text-{{$team->skill_grade_color}} table-font">{{ $team->skill_grade }}</h3>
                                            </td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->per_color}} table-num">{{ $team->per }}</td>
                                            <td class="hidden-sm hidden-xs sorting {{$team->fg_color}} table-num">{{ $team->fg }}%</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->apg_color}} table-num">{{ $team->apg}}</td>
                                            <td class="hidden-sm hidden-xs sorting {{$team->apg_ppg_color}} table-num">{{ $team->apg_ppg }}</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->ppg_color}} table-num">{{ $team->ppg }}</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->rpg_color}} table-num">{{ $team->rpg }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success push-5-t"  data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-plus"></i></button>
                                                    <a class="btn btn-xs btn-default push-5-t" href="/free-agency"  data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
