
<tr>
                                        <td>Suggestions</td>
                                        <td>
                                            @if ($item->permission =="true")
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('suggestions')" checked id="suggestions">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('suggestions')" id="suggestions">
                                            @endif
                                        </td>
                                    </tr>