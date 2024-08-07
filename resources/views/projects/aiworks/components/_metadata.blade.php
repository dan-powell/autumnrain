<dt class="Show-metadata-key">{{ $key }}</dt>
<dd class="Show-metadata-value">
    @if(is_array($metadata) || is_object($metadata))
        <dl class="Show-metadata-list">
            @each('projects.aiworks.components._metadata', collect($metadata), 'metadata')
        </dl>
    @else
        {{ $metadata }}
    @endif
</dd>
