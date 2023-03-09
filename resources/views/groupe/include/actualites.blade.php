<tr>
                                        <td>Rapport</td>
                                        <td>
                                            @if ($item->permission =="true")
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('actualites')" checked id="actualites">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('actualites')" id="actualites">
                                            @endif
                                        </td>
                                    </tr>