<tr>
                                        <td>Rapport</td>
                                        <td>
                                            @if ($item->permission =="true")
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('rapport')" checked id="rapport">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('rapport')" id="rapport">
                                            @endif
                                        </td>
                                    </tr>