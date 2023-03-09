<tr>
                                        <td>Cours</td>
                                        <td>
                                            @if ($item->permission =="true")
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('cours')" checked id="cours">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('cours')" id="cours">
                                            @endif
                                        </td>
                                    </tr>