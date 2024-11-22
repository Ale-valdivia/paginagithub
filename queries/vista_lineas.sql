select cotizacion.idCotizacion,
linea_cotizacion.numeroLinea,
acrilicos.nombreAcrilico,
linea_cotizacion.cantidad,
acrilicos.precioAcrilico,
linea_cotizacion.valorTotal


from linea_cotizacion
left join cotizacion on linea_cotizacion.idCotizacion=cotizacion.idCotizacion
left join servicios on linea_cotizacion.idServicio=servicios.idServicio
left join acrilicos on linea_cotizacion.idTrabajo=acrilicos.idAcrilico
left join m_varios on linea_cotizacion.idTrabajo=m_varios.idMaterialesVarios
left join h_negro on linea_cotizacion.idTrabajo=h_negro.idHierroNegro
left join a_inoxidable on linea_cotizacion.idTrabajo=a_inoxidable.idAceroInoxidable
left join p_aluminio on linea_cotizacion.idTrabajo=p_aluminio.idPerfileriaAluminio
left join m_obra on linea_cotizacion.idTrabajo=m_obra.idManodeObra
left join outsourcing on linea_cotizacion.idTrabajo=outsourcing.idOutsourcing

